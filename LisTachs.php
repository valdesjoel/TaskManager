<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once ("connexionDB.php");//inclusion d'un fichier
$cnx = connexionPDO(); //exécution de la fonction ConnexionPDO();

$maRequete = "SELECT * FROM tasks";
$monResultat = $cnx->prepare($maRequete);
$monResultat->execute();

?>
    <thead>
		<tr>
			<th>Matricule</th>
			<th>titre</th>
			<th>description</th>
			<th>date_echeance</th>
			<th>etat</th>
			<th>created_at</th>
			<th colspan="2">Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php while ($tasks = $monResultat->fetch()) { ?>
		<tr>
			<td><?php echo $tasks['matricule']; ?></td>
			<td><?php echo $tasks['titre']; ?></td>
			<td><?php echo $tasks['description']; ?></td>
			<td><?php echo $tasks['date_echeance']; ?></td>
			<td><?php echo $tasks['etat']; ?></td>
			<td><?php echo $tasks['created_at']; ?></td>

            <td><a href="modifiertaches.php?matricule=<?php echo ($tasks['matricule']) ?>" style="color:blue;">Editer</a></td>
			<td><a onclick="return confirm('êtes-vous sure de vouloir supprimer cette tache ?')" href="supprimerTaches.php?matricule=<?php echo ($tasks['matricule']) ?>" style="color:red;">Supprimer</a></td>
		</tr>
            <?php	} ?>
	</tbody>


	</table>
			</div>
		</div>

	
</div>
</body>
</body>
</html>
