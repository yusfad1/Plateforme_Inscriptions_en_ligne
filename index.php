<!DOCTYPE html>
<html>
	<head>
 		<title> Admin </title>
 		<link rel="stylesheet"  a href="style.css">
 		<link rel="stylesheet"  a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<meta charset="utf-8">
	</head>
	<body>
		<div><a id="bouton" href="login.php">Espace Etudiants</a></div>
 		<div class="container">
 			<img src="images/loginAdmin.png"/><br>
 			<p><?php if(isset($_POST['mail']))
                    include("BDD/traitAdmin.php");
            ?></p>
 			<form method="POST">
 				<div class="form-input">
 					<input type="email" name="mail" placeholder="Adresse mail" value="<?php if(isset($mail)){ echo $mail; }?>" required/> 
 				</div>
 				<div class="form-input">
 					<input type="password" name="mdp" placeholder="Mot de passe" value="<?php if(isset($mdp)){ echo $mdp; }?>" required/>
 				</div>
 				<input type="submit"  value="connexion" class="btn-login"/>
 			</form>
 		</div>
	</body>
</html>