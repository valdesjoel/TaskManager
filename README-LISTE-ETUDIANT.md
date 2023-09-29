Documentation de l'Interface "Liste étudiant"

Description
Cette interface web permet d'afficher une liste d'étudiants dans un tableau. Elle est conçue pour être conviviale, responsive (s'adaptant aux écrans d'ordinateur, tablette et téléphone portable) et inclut la possibilité d'ajouter de nouveaux étudiants.
Utilisation
Ouvrez cette page dans un navigateur web pour afficher la liste des étudiants.
Vous pouvez ajouter de nouveaux étudiants en cliquant sur le bouton "Ajouter un étudiant".

Structure du code
Le code de l'interface est divisé en deux parties principales : HTML et CSS.

HTML

Balises <meta> : Définissent l'encodage et les métadonnées de la page.
Balise <title> : Spécifie le titre de la page.
Lien vers Bootstrap : Inclut la bibliothèque Bootstrap 5 pour les icônes.
Balise <style> : Contient les styles CSS personnalisés pour la page.

Structure du contenu HTML
<div class="container"> : Conteneur principal de la page.
<h1> : Titre de la page ("Liste étudiant").
<table> : Tableau pour afficher la liste des étudiants.
<thead> : En-tête du tableau contenant les titres des colonnes.
<tbody> : Corps du tableau où les données des étudiants seront affichées.
<div class="add-student"> : Div contenant le bouton pour ajouter un nouvel étudiant.

CSS

Le CSS personnalisé est inclus dans la balise <style> et est utilisé pour styliser la page.
Styles généraux :
La police de caractères est définie comme "Arial, sans-serif".
Le fond de la page est gris clair (#f2f2f2).
La marge et le rembourrage de la page sont supprimés.

Styles du tableau :
Le tableau s'adapte à la largeur de son conteneur.
Les cellules du tableau ont un espacement et un alignement de texte spécifiques.
Les cellules de l'en-tête du tableau ont un fond gris foncé (#333) avec du texte blanc.
Les lignes paires du tableau ont un fond gris clair (#f2f2f2).

Styles responsives :
Le texte dans le tableau est réduit à une taille de police de 12px pour les écrans dont la largeur est inférieure à 768px.