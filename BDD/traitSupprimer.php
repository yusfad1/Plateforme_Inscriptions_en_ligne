<?php
     
	include('connexionBDD.php');
	
	 $reponse=$connexion->query('SELECT matricule FROM etudients WHERE matricule = \''.$_POST['matricule'].'\' ');
	 
	 
	 if($donnee=$reponse->fetch())
	 {
		 $reponse2 =$connexion->query('DELETE FROM etudients WHERE matricule = \''.$donnee['matricule'].'\' ');
		 echo 'Etudiant de matricule '.$donnee['matricule'].' est supprimé de la base de données';
		 $reponse2->closeCursor();
	 }
	 else
       echo 'Matricule erroné';
	
	$reponse->closeCursor();
?>
	