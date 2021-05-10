<?php
  require_once('BDD/connexionBDD.php');
  session_start(); 
  
  // S'il n'y a pas de session alors on ne va pas sur cette page
  if(isset($_SESSION['studentmat'])){ 
    // On récupère les informations de l'étudiant connecté
    $changer = $connexion->query("SELECT * 
      FROM etudients 
      WHERE matricule ='".$_SESSION['studentmat']."'");
  
    $changer = $changer->fetch(); 

    $adresse="uploads/".$changer['cycle']."/".$changer['niveau']."/".$changer['filiere']."/".$changer['photo'];
  }
?>
<!DOCTYPE html>
<html>
	<head>
 		<title> changer le mot de passe </title>
 		<link rel="stylesheet"  a href="style.css">
 		<link rel="stylesheet"  a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<meta charset="utf-8">
	</head>
	<body>
 		<div class="container">
 			<img src="<?php echo $adresse ?>"/>
 			<p><?php if(isset($_POST['mail']))
                    include("BDD/traitchangerpwd.php");
            ?></p>
 			<form method="POST">
 				<div class="form-input">
 					<input type="email" name="mail" placeholder="Adresse mail" required/> 
 				</div>
 				<div class="form-input">
 					<input type="password" name="mdp" placeholder="Mot de passe" required/>
 				</div>
 				<div class="form-input">
 					<input type="password" name="nmdp" placeholder="Nouveau Mot de passe" required/>
 				</div>
 				<div class="form-input">
 					<input type="password" name="cmdp" placeholder="Confirmer le Mot de passe" required/>
 				</div>
 				<input type="submit"  value="Enregistrer" class="btn-login"/>
 			</form>
 		</div>
	</body>
</html>