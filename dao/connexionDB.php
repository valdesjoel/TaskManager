<?php
	function connexionPDO(){
		$login = "root";
		$pwd = "";
		$bd = "taskmanager";
		$serveur = "localhost";

		try{
			
				$options = array(
        		PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8",
       			 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    		);
			$conn = new PDO("mysql:host=$serveur;dbname=$bd",$login,$pwd,$options);
			//echo ("Succès de connexion PDO");
			return $conn;
		}catch(PDOException $e){
			print("Erreur de connexion PDO");
			die();
		}
		date_default_timezone_set('Africa/Libreville');
	}


?>