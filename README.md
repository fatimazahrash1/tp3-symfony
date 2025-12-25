Dans ce TP, j'ai accompli les réalisations suivantes :

- Conversion d'une interface HTML statique en une application web Symfony interactive et fonctionnelle

- Mise en place d'un objet de transfert de données `ProductOrder` servant à structurer les informations du formulaire (nombre d'unités et teinte sélectionnée)

- Élaboration d'un FormType `ProductOrderType` incluant des règles de validation :
  - Un champ numérique (IntegerType) contrôlé entre 1 et 10 unités grâce à la contrainte `Assert\Range`
  - Un menu déroulant (ChoiceType) proposant trois variantes chromatiques : Matte Black, Pearl White et Silver
  - Un bouton d'envoi "Add to Cart" (SubmitType)

- Implémentation du contrôleur `ProductController` chargé de l'affichage initial et du traitement des données soumises

- Intégration de la validation côté serveur et de la sécurité anti-CSRF

- Configuration du template Twig `templates/product/index.html.twig` en exploitant les fonctions natives Symfony :
  - `{{ form_start() }}` pour initialiser le formulaire avec token de sécurité
  - `{{ form_widget() }}` pour le rendu des champs de saisie
  - `{{ form_label() }}` pour l'affichage des étiquettes
  - `{{ form_end() }}` pour la clôture du formulaire

- Incorporation de Bootstrap 5.3.2 garantissant une interface adaptative

- Organisation du fichier image du produit dans le répertoire `public/images/headphones.jpg`

- Exploitation de la fonction `{{ asset() }}` pour l'intégration des ressources visuelles

- Configuration d'un système de notifications flash confirmant l'ajout d'articles au panier

- Respect de l'architecture Symfony avec une séparation claire des couches (DTO, FormType, Contrôleur, Vue)
