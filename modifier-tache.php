<?php

    //rappel de la connexion a la base de données
    require_once('dao/connexionDB.php');
    $vinny = connexionPDO();

    //variable
    $id=NULL;
    $idErr=NULL;
    $titreErr = NULL;
    $descriptionErr = NULL;
    $date_echeanceErr = NULL;
    $titre = NULL;
    $description = NULL;
    $date_echeance = NULL;

      //verification de la soumission des variable

    if(!isset($_REQUEST['titre']) || !isset($_REQUEST['description']) || !isset($_REQUEST['date_echeance']))
    {
        echo ('erreur il manque le titre, la description ou la date d echenace');
       
    }
    
    //
    else if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //verification des variables
        if (empty($_REQUEST["titre"])) {
            $titreErr = "le titre est obligatoire";
            echot"".$titreErr;
        } else {
            $titre = ($_REQUEST["titre"]);
        }
        if (empty($_REQUEST["description"])) {
            $descriptionErr = "la description est obligatoire";
            echo"".$descriptionErr;
        } else {
            $description = ($_REQUEST["description"]);
        }
        if (empty($_REQUEST["date_echeance"])) {
            $date_echeanceErr = "la date_echeance est obligatoire";
            echo"".$date_echeanceErr;
        } else {
            $date_echeance = ($_REQUEST["date_echeance"]);
        }
        if (empty($_REQUEST["id"])) {
           
            $idErr = "id est obligatoire";
            echo"".$idErr;
        } else {
            $id = $_REQUEST["id"];
        }
        
        //ajuster la date recuperer en _REQUEST
        $date_echeance = date ("Y/m/d", strtotime ($_POST['date_echeance']));	

        //requete UPDATE sql
     try{
           $insPdo=$vinny->prepare("UPDATE tasks SET titre = :titre , description = :description , date_echeance = :date_echeance  where id = :id");
          
           $insPdo->bindParam(':id',$id);
           $insPdo->bindParam(':titre',$titre);
           $insPdo->bindParam(':description',$description);
           $insPdo->bindParam(':date_echeance',$date_echeance);

           //execution des requete
           $insPdo->execute();
          
           
         }
         catch(PDOException $e){
             echo "Connection failed: " . $e->getMessage();
         }
   
    }