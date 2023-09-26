<?php 

//echo "Bonjour la IIRT2";

if(isset($_REQUEST['login']) && isset($_REQUEST['password']) ){

	$login = $_REQUEST['login'];
	$password = md5($_REQUEST['password']);

	require_once ("dao/connexionDB.php");

	$cnx = connexionPDO();

	$maRequete = "SELECT * FROM users WHERE login = ? AND password = ?";
	$monResultat = $cnx->prepare($maRequete);
	$parametres = array($login,$password);
	$monResultat->execute($parametres);

	if ($monResultat->fetch()) {
		
		//echo "Trouve";
		header("location: listeEtudiants.php");

	}else{
		//echo "Non Trouve";
		header("location: index.php");
	}
}else{
	
	echo "Parametres absents";
}

 ?>