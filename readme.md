# TP BattleOffice

- Résumé :
Vous avez pour mission de créer un système simplifié de E-Commerce en Landing Page, connecté à distance à une API Centrale qui gère les commandes.
Le projet comporte des contraintes que vous devez respecter. Mais aussi des recommandations dont vous pouvez vous passer.
L'objectif principal est de finir le projet dans le temps imparti avec toutes les contraintes requises.
Le projet est à la fois un mini E-Commerce local, mais aussi une landing Page connectée à un E-Commerce décentralisé. Cette pratique courante permet de déléguer la gestion de la commande à un backend externe, afin que seul le paiement et l'envoi de l'email soit géré par le système local.

- 🖊️ Contraintes :
Vous devez respecter le workflow suivant pour le tunnel de conversion ( = réalisation d'une commande ):
Affichage de la page d'accueil
Remplissage du formulaire
Validation du formulaire et affichage d'erreurs si besoin
Enregistrement de la commande en base de données locale
Envoi de la commande à l'API Centralisée par requête POST
URL : https://api-commerce.simplon-roanne.com/order
URL Documentation : https://api-commerce.simplon-roanne.com
Redirection sur la page de paiement Stripe/Paypal
Succès du paiement
En cas d'échec du paiement, redirection sur page d'accueil avec erreur


Envoi du statut de paiement validé à l'API Centralisée par requête POST
URL : https://api-commerce.simplon-roanne.com/order/status
Envoi de l'email de confirmation
Redirection sur la page de confirmation
Contraintes fonctionnelles
Tous les champs de l'adresse de facturation sont requis à part Complément Adr ( Adresse ligne 2 )
Lorsqu'ils sont affichés, tous les champs de l'adresse de livraison sont également requis
Des erreurs en rouge doivent forcer le visiteur à remplir les champs
L'adresse de livraison peut être différente de l'adresse de facturation
Il est possible de commander pour les pays suivants : France, Belgique, Luxembourg
Le paiement s'effectue avec Stripe ou Paypal. Vous devez faire fonctionner le paiement de façon à finaliser une commande et arriver sur la page de confirmation en cas de succès.
Un paiement échoué doit faire revenir sur la page d'accueil avec un message d'erreur.
Un email de confirmation est envoyé en cas de succès de commande.
Contraintes techniques
Toutes les informations saisies doivent être enregistrées dans une base de données locales
La commande
L'adresse de livraison
L'adresse de facturation si elle est fournie
Le client
Le produit acheté parmi ceux disponibles
Le mode de paiement
Les classes de type Form doivent être utilisées au maximum pour gérer la requête, les erreurs de formulaires, et l'enregistrement des entités.
Utilisez le système des fichiers de logs de Symfony pour garder une trace du bon déroulement des commandes, de l'envoi de l'email, et de l'envoi vers l'API Centrale
Logging (Symfony Docs)

- 📄 Recommandations :
Avant de commencer le projet, établissez une liste de tâches exhaustives pour avoir un chemin à suivre et mieux penser votre code.
Pensez votre base de données sous forme de diagramme puis créez la avec l'outil de création des entités de Symfony en ligne de commandes. Ainsi la création de la base de données est optimale.
Gérer Stripe et Paypal.
Si l'intégration est trop complexe il faudra s'en passer, laissez vous le temps d'essayer mais passez vite à autre chose
Utilisez HttpClient pour la communication avec l'API Centrale

- 🏃 Installation du projet :
Installez un nouveau projet Symfony version 5.2
Copiez les fichiers suivants dans votre projet
simplon-roanne / venteprivee-nœerf · GitLab

Étapes de développement
A partir de ces consignes, vous devez rédiger la liste des tâches en allant dans le plus grand niveau de détail possible. Vous devriez arriver à une liste de 20 à 30 tâches qui seront plus faciles à accomplir et vous donneront un chemin à suivre.

