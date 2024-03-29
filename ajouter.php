<?php 

require"./dao/connexionDB.php" ;

$conn= connexionPDO();

$message=null ;
$succes=null ;
echo "teste";

if (isset($_POST['submit'])) {
    # code...

    $titre= $_POST['titre'] ;
    $description=$_POST['description'] ;
    $date_echeance= $_POST['date_echeance'] ;

    

    if (empty($titre)) {
        # code...
        $message="le titre ne doit pas etre vide !" ;
    }
    if (empty($description)) {
        # code...
        $message="la description  ne doit pas etre vide !" ;
    }
    else{
        $marequete="INSERT INTO tasks (titre, description, date_echeance) VALUES (?,?,?)" ;
        $mareponse= $conn->prepare($marequete) ;
        $parametres= array($titre, $description,$date_echeance) ;
        $mareponse->execute($parametres) ;

        $succes="Votre ajout a été un succes ! " ;







    }

    

    



}






?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Déclaration de l'encodage du document -->
    <meta charset="UTF-8">
    <!-- Déclaration de la vue port pour les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>ajouter-tache</title>
    <!-- CSS interne -->
    <style>
        /* Réinitialisation des styles par défaut du navigateur */
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: #FFF;
            margin: 0;
            padding: 0;
        }
        
        /* Style du conteneur principal */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Style du titre de la page */
        h1 {
            text-align: center;
        }
        
        /* Style des groupes de formulaire */
        .form-group {
            margin-bottom: 20px;
        }
        
        /* Style des libellés des champs de formulaire */
        label {
            display: block;
            /*font-weight: bold;*/
        }
        
        /* Style des champs de texte, des zones de texte et des champs de date */
        input[type="text"],
        textarea,
        input[type="date"] {
            width: 96%;
            padding: 10px;
            border: 1px solid #646970;
            border-radius: 3px;
            font-size: 16px;
        }

        textarea {
            min-width: auto;
            max-width: 96%;
        }

        /* Style du bouton de soumission */
        button {
            background-color: #2271B1;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        
        /* Style au survol du bouton de soumission */
        button:hover {
            background-color: #008A20;
        }
        
        /* Style pour les libellés de champ obligatoires */
        .required {
            color: #D63638;
        }
    </style>
    <!-- Lien vers l'adresse de l'image d'icône -->
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/a/ACg8ocKGQURKRFhf9X12AVHs-qlrnCqpxBNZbdvxMe7SrKQNohShR9s52kkJo-HuXgWnkAu1L7VKcnrJNz8vPmSKU3ABpe0=s32" type="image/x-icon">
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container">
        <!-- Titre de la page -->
        <h1>Ajouter une Tâche</h1>
        <!-- Formulaire pour ajouter une tâche -->
        <form action="ajouter.php" method="post">
            <!-- Champ pour le titre de la tâche -->
            <div class="form-group">
                <label for="titre">Titre<span class="required">*</span></label>
                <input type="text" id="titre" name="titre"  maxlength="100">
                <?php 
                
                if (isset($message)) {
                    # code...
                    echo $message;
                }?>
            </div>
            <!-- Champ pour la description de la tâche -->
            <div class="form-group">
                <label for="description">Description<span class="required">*</span></label>
                <textarea id="description" name="description" required maxlength="255"></textarea>

            </div>
            <!-- Champ pour la date d'échéance de la tâche -->
            <div class="form-group">
                <label for="date_echeance">Date d'échéance<span class="required">*</span></label>
                <input type="datetime-local" id="date_echeance" name="date_echeance" required>
                <?php 
                
                if (isset($message)) {
                    # code...
                    echo $message;
                }?>
            </div>
            <!-- Bouton de soumission du formulaire -->
            <div class="form-group">
                <button name="submit" type="submit" >Ajouter tâche</button>
            </div>

            <?php 

            if (isset($succes)) {
                # code...

                echo $succes ;
            }
            
            ?>

            
        </form>
    </div>
</body>
</html>