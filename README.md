
Dans ce TP, j'ai réalisé les tâches suivantes :

- Transformation d'une page HTML statique en application Symfony dynamique
- Création d'un DTO `ProductOrder` pour encapsuler les données du formulaire (quantité et couleur)
- Développement d'un FormType `ProductOrderType` avec validation :
  - Champ quantité (IntegerType) validé entre 1 et 10 avec contrainte `Assert\Range`
  - Sélecteur de couleur (ChoiceType) avec trois options : Matte Black, Pearl White, Silver
  - Bouton de soumission "Add to Cart" (SubmitType)
- Création du contrôleur `ProductController` pour gérer l'affichage et la soumission du formulaire
- Implémentation de la validation automatique et de la protection CSRF
- Personnalisation de la template Twig (`templates/product/index.html.twig`) en utilisant les helpers Symfony :
  - `{{ form_start() }}` pour générer la balise form avec CSRF
  - `{{ form_widget() }}` pour afficher les champs
  - `{{ form_label() }}` pour les labels
  - `{{ form_end() }}` pour fermer le formulaire
- Intégration de Bootstrap 5.3.2 pour conserver le design responsive
- Gestion de l'image du produit stockée localement dans `public/images/headphones.jpg`
- Utilisation de la fonction `{{ asset() }}` pour afficher l'image
- Ajout de messages flash de confirmation après ajout au panier
- Application des bonnes pratiques Symfony : séparation des responsabilités (DTO, FormType, Controller, Template)
