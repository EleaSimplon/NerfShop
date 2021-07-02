<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Form\AdresseLivraisonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('compAdress')
            ->add('ville')
            ->add('codePostal')
            ->add('pays', ChoiceType::class, [
                'choices'  => [
                    'France' => 'France',
                    'Luxembourg' => 'Luxembourg',
                    'Belgique' => 'Belgique',
                ]])
            ->add('telephone')
            ->add('email', RepeatedType::class, [
                'first_options'  => ['label' => 'Email'],
                'second_options' => ['label' => 'Repeat Email'],
            ])
            // RECUP TABLE L'ADRESSE DE LIVRAISON POUR METTRE DANS MEME FORM
            ->add('adresseLivraison', AdresseLivraisonType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
