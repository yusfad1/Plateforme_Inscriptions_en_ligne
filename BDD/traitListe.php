<!DOCTYPE HTML>
<html>
<head>	
	<title>LISTE DES ETUDIANTS</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../css/traitListe.css">
</head>
<body>
	
	<?php
		include('connexionBDD.php');
		
		$reponse=$connexion->prepare('SELECT matricule,UPPER(nom)  AS nom ,UPPER(prenom) AS prenom, DAY(dateNaiss) AS jour,MONTH(dateNaiss) AS mois,YEAR(dateNaiss) AS annee ,sexe,cycle ,filiere ,niveau,photo,CIN,CopieBac,ATTReussite
			FROM etudients 
			WHERE cycle= :cyc AND filiere= :fil AND Niveau= :niv');
							  
		$reponse->execute(array('cyc'=>$_POST['situation'], 
								'fil'=>$_POST['filiere'], 
								'niv'=>$_POST['niveau']));
	?>
		
		<center>
			<a href="../accueil.php">ACCUEIL</a>
			<hr class="trait">
			<table cellspacing="0">
					<h1>Liste des Etudiants</h1>
					<tr>
					 	<th>Photo</th>
						<th>Matricule</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Sexe</th>
						<th>Date de naissance</th>
						<th>Copie CIN</th>
						<th>Copie Bac</th>
						<th>attestation de reussit</th>
					</tr>
				 <?php
				 
					while($donnee=$reponse->fetch())
					{
						$adress1="../uploads/".$donnee['cycle']."/".$donnee['niveau']."/".$donnee['filiere']."/".$donnee['photo'];
						$adress2="../uploads/".$donnee['cycle']."/".$donnee['niveau']."/".$donnee['filiere']."/".$donnee['CIN'];
						$adress3="../uploads/".$donnee['cycle']."/".$donnee['niveau']."/".$donnee['filiere']."/".$donnee['CopieBac'];
						$adress4="../uploads/".$donnee['cycle']."/".$donnee['niveau']."/".$donnee['filiere']."/".$donnee['ATTReussite'];
						
					?>	
						<tr>
						<td><img src="<?php echo $adress1;?>"></td>
						<td><?php echo $donnee['matricule'] ?></td>
						<td><?php echo $donnee['nom']?></td>
						<td><?php echo $donnee['prenom']?></td>
						<td><?php echo $donnee['sexe']?></td>'
						<td><?php echo $donnee['jour'].'/'.$donnee['mois'].'/'.$donnee['annee'] ?></td>
						<td><a href="<?php echo $adress2;?>">Voir</a></td>
						<td><a href="<?php echo $adress3;?>">Voir</a></td>
						<td><a href="<?php echo $adress4;?>">Voir</a></td>
						</tr>
					<?php
					}
				 
				 ?>
			</table> 
		</center>
		
		<?php
		$reponse->closeCursor();
		?>
</body>
</html>