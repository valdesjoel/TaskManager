Documentation de l'Interface "Ajouter une tâche"

Description
Cette interface web permet d'ajouter une nouvelle tâche en remplissant un formulaire. Les champs obligatoires sont marqués d'une astérisque rouge (*). L'interface est conçue pour être conviviale, responsive (s'adaptant aux écrans d'ordinateur, tablette et téléphone portable), et stylisée pour une expérience utilisateur agréable.
Utilisation
Ouvrez cette page dans un navigateur web pour ajouter une nouvelle tâche à votre liste.
Remplissez les champs obligatoires (Titre, Description, Date d'échéance).
Cliquez sur le bouton "Ajouter" pour soumettre le formulaire.
Structure du code
Le code de l'interface est divisé en deux parties principales : HTML et CSS.

HTML

Balises <meta> : Définissent l'encodage et les métadonnées de la page.
Balise <title> : Spécifie le titre de la page.
Lien vers Bootstrap : Inclut la bibliothèque Bootstrap 5 pour les icônes (le cas échéant).
Balise <style> : Contient les styles CSS personnalisés pour la page.

Structure du contenu HTML
<div class="container"> : Conteneur principal de la page.
<h1> : Titre de la page ("Ajouter une tâche").
<form> : Formulaire pour ajouter une nouvelle tâche.
Groupes de formulaire : Chaque groupe contient un label et un champ de saisie.
Labels : Les labels indiquent le nom des champs (Titre, Description, Date d'échéance).
Champs de saisie : Les champs de texte et de date sont utilisés pour entrer les informations de la tâche.
<button> : Bouton "Ajouter" pour soumettre le formulaire.

CSS

Le CSS personnalisé est inclus dans la balise <style> et est utilisé pour styliser la page.

Styles généraux :
La police de caractères par défaut est Arial, avec un arrière-plan gris clair et des marges supprimées.
Styles du formulaire :
Le formulaire est contenu dans un conteneur avec un fond blanc, des coins arrondis et une légère ombre.
Les groupes de formulaire ont une marge inférieure pour les espacer.

Styles des labels :
Les labels sont en gras et ont une couleur de texte spécifique.
Styles des champs de formulaire :
Les champs de texte et de date ont une largeur de 100%, une bordure grise, et des coins arrondis.

Style du bouton de soumission :
Le bouton a une couleur de fond bleue, du texte blanc, pas de bordure, et des coins arrondis.
Styles pour les écrans plus petits (responsive) :
L'espacement intérieur du formulaire est réduit pour les écrans plus petits.



