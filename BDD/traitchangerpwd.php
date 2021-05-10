<?php  
include "connexionBDD.php";
	$reponse=$connexion->query('SELECT mdp FROM etudients WHERE email= \''.$_POST['mail'].'\' ');
	$reponse=$reponse->fetch();

	if ($reponse['mdp'] == $_POST['mdp']) {
		if ($_POST['nmdp'] == $_POST['cmdp']) {
			$changerpwd=$connexion->prepare("UPDATE etudients SET mdp= :pwd 
				where email= :mail");
			$changerpwd->execute(array( 'pwd' => $_POST['nmdp'],
									   'mail' => $_POST['mail'] ));

			$changerpwd->closeCursor();
			header('Location: ./login.php');
		}
		else{
			echo "Fait attention: la confirmation du mot de passs ne correspond pas !";
		}
		
	}
	else
	{
		echo "le mot de passe ne correspond pas !";
	}

?>