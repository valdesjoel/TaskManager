<?php 


require_once("connexionDB.php");
$id=$_GET['id'];
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $req=$con->prepare("DELETE FROM tasks WERE id= ?");
    $req->execute(array($id));
    if($req)
    {
        echo "Suppression de la tache effectuée avec succès"
    }
}



?