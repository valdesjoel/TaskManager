<?php
require"./dao/connexionDB.php";//inclusion d'un fichier
$cnn = connexionPDO(); //exécution de la fonction ConnexionPDO();

$maRequete = "SELECT * FROM tasks";
$monResultat = $cnn->prepare($maRequete);
$monResultat->execute();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListeTache</title>
</head>
<body>

<h3>Tous les utilisateurs</h3> 
    <h4>il y a <?=$monResultat?> Utilisateurs</h4>

    <table border="1">
		<tr>
			<th>id</th>
			<th>titre</th>
			<th>description</th>
			<th>date_echeance</th>
			<th>etat</th>
			<th>created_at</th>
			<th colspan="2">Actions</th>
		</tr>

	//Recuperation des ligne de chaque taches
		<?php while ($tasks = $monResultat->fetch()) {  
		     } ?>
		<tr>
			<td><?php echo $tasks['id']; ?></td>
			<td><?php echo $tasks['titre']; ?></td>
			<td><?php echo $tasks['description']; ?></td>
			<td><?php echo $tasks['date_echeance']; ?></td>
			<td><?php echo $tasks['etat']; ?></td>
			<td><?php echo $tasks['created_at']; ?></td>

            <td><a href="modifiertaches.php?id=<?php echo ($tasks['id']) ?>" style="color:blue;">Editer</a></td>
			<td><a onclick="return confirm('êtes-vous sure de vouloir supprimer cette tache ?')" href="supprimerTaches.php?id=<?php echo ($tasks['id']) ?>" style="color:red;">Supprimer</a></td>
		</tr>
	   ?> 
	</table>

</div>
</body>
</body>
</html>
