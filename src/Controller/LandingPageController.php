<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Order;
use App\Entity\AdresseLivraison;
use App\Form\ClientType;
use App\Repository\ProduitRepository;
use Symfony\Bridge\Monolog\Handler\MailerHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     * @throws \Exception
     */
    public function index(Request $request, ProduitRepository $produitRepository)
    {
        $client = new Client();

        $adresse =  new AdresseLivraison();

        $order = new Order();

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){

            $productId = $request->get('product');
           
            $product = $produitRepository->findOneBy(['id' => $productId]);

            if (!isset($productId)) {
                $this->addFlash(
                    'notice',
                    'Veuillez selectionner un produit'
                );
                return $this->redirectToRoute('landing_page');
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();

            //  CLIENT ADD PRODUCT TO PAY
            $order->setClient($client);
            $order->setProduit($product);
            $adresse = $client->getAdresseLivraison();
            $order->setAdresseLivraison($adresse);
            $order->setMethodePaiement($request->get('paymentMethod'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            // METTRE PAIEMENT EN STATUT WAITING EN BDD & API
            $order->setStatut('WAITING');
            
            // RECUP NAME PAYMENTMETHOD DANS FORM
            $paymentMethod = $request->get('paymentMethod'); 
            // APPEL FUNCTION API & FLUSH
            $this->api($order);
            $entityManager->flush();
      
            // RECUP TOUS LES PRODUITS
            $produit = $produitRepository->findAll();
                        

            // IF POUR BTN PAIEMENT STRIPE/PAYPAL
            if ($paymentMethod === 'stripe') {

                return $this->redirectToRoute('stripe', [
                    'id' => $order->getId()
                ]);

            }   else {
                    return $this->redirectToRoute('paypal', [
                        'id' => $order->getId()
                    ]);
                        
                }
        }

        // RECUP TOUS LES PRODUITS POUR POUVOIR LES AFFICHER
        $produit = $produitRepository->findAll();

        return $this->render('landing_page/index_new.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
            // POUR LA BOUCLE FOR
            'produits' => $produit
        ]);

    }
    
    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('landing_page/confirmation.html.twig', [

        ]);
    }


   /**
     * @Route("/stripe/{id}", name="stripe")
     */
    public function stripe(Request $request, Order $order, MailerInterface $mailer)
    {
        $this->paiement($order);

        if (isset($_GET["click"])) {

            $this->apiPaid($order);

            $entityManager = $this->getDoctrine()->getManager();
            $order->setStatut('PAID');
            $entityManager->persist($order);
            $entityManager->flush();
            $this->sendEmail($mailer, $order);
        }

        return $this->render('landing_page/partials/stripe.html.twig', [
            'order' => $order
        ]);
    }

    /**
     * @Route("/paypal/{id}", name="paypal")
     */
    public function paypal(Request $request, Order $order)
    {

        return $this->render('landing_page/partials/paypal.html.twig', [
            'order' => $order
        ]);
    }

        
    public function paiement($order)
    {
        // INSTANCIER STRIPE + PUBLIC KEY
        \Stripe\Stripe::setApiKey
        ('sk_test_51ItVdFIUX0Fig29i1T3CkylXZ6g4xtxwZwcgUTrVMhbmsM7bhNcDd2Mg0gDtFEMBSRHTMOOvbg8QxvbkUmmL9FLE00FCkmbgYS');
        //CREER INTENTION PAIEMENT ET STOCK ANSWER VAR $paymentIntent
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $order->getProduit()->getprixPromo(), // PRIX EN CENTIMES
            'currency' => 'eur',
        ]);

        $output = [
            'clientSecret' => $paymentIntent->client_secret,
        ];

        //redirection
        return $this->render('landing_page/confirmation.html.twig', [
            'id' => $order->getId()
        ]);
    }

    public function sendEmail(MailerInterface $mailer, $order)
    {
        $email = (new Email())
            ->from('nerf-shop@gmail.com')
            ->to($order->getClient()->getEmail())
            ->subject('Merci pour votre achat !')
            ->text('Nous vous confirmons que votre commande à bien été prise en compte. Nous vous enverrons un mail dès quil sera expédié. A bientôt sur Nerf Shop');

        $mailer->send($email);

        // ...
    }

    public function api(Order $order)
    {
        
        $token = 'mJxTXVXMfRzLg6ZdhUhM4F6Eutcm1ZiPk4fNmvBMxyNR4ciRsc8v0hOmlzA0vTaX';

      
        $datas = 
        [
            "order" => [
                "id" => $order->getId(),
                "product" => $order->getProduit()->getNomProduit(),
                "payment_method" => "paypal",
                "status" => "WAITING",
                "client" => [
                    "firstname" => $order->getClient()->getPrenom(),
                    "lastname" => $order->getClient()->getNom(),
                    "email" => $order->getClient()->getEmail(),
                ],
                "addresses" => [
                    "billing" => [
                            "address_line1" => $order->getClient()->getAdresse(),
                            "address_line2" => $order->getClient()->getCompAdress(),
                            "city" => $order->getClient()->getVille(),
                            "zipcode" => $order->getClient()->getCodePostal(),
                            "country" => $order->getClient()->getPays(),
                            "phone" => $order->getClient()->getTelephone(),
                    ],
                    "shipping" => [
                        "address_line1" => $order->getAdresseLivraison()->getAdresse(),
                        "address_line2" => $order->getAdresseLivraison()->getCompAdresse(),
                        "city" => $order->getAdresseLivraison()->getVille(),
                        "zipcode" => $order->getAdresseLivraison()->getCodePostal(),
                        "country" => $order->getAdresseLivraison()->getPays(),
                        "phone" => $order->getAdresseLivraison()->getTelephone(),
                    ],
                ]
            ]
        ];
        $client = HttpClient::create();
        $response = $client->request( 'POST', 'https://api-commerce.simplon-roanne.com/order', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-type' =>'application/json',
            ], 
        
            'body'=> json_encode($datas),
                   
        ]);
                 
        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json' 
       
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
       
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        $entityManager = $this->getDoctrine()->getManager();
        $order->setOrderId($content['order_id']);

        return $content['order_id'];
    }

    public function apiPaid(Order $order)
    {

        $idorder = $order->getOrderId();
        $token = 'mJxTXVXMfRzLg6ZdhUhM4F6Eutcm1ZiPk4fNmvBMxyNR4ciRsc8v0hOmlzA0vTaX';

        $data = [
            "status" => "PAID",
        ];


        $client = HttpClient::create();
        $response = $client->request('POST', 'https://api-commerce.simplon-roanne.com/order/' . $idorder . '/status', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-type' => 'application/json',
            ],

            'body' => json_encode($data),

        ]);


        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json' 

        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'

        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $content;
    }

}