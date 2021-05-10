<!DOCTYPE html>
<html>
	<head>
 		<title> Login For student</title>
 		<link rel="stylesheet"  a href="style.css">
 		<link rel="stylesheet"  a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<meta charset="utf-8">
	</head>
	<body>
		<div id="bouton"><a href="index.php">Espace Admins</a></div>
 		<div class="container">
 			<img src="images/loginStudent.png"/>
 			<p><?php if(isset($_POST['mail']))
                    include("BDD/traitLogin.php");
            ?></p>
 			<form method="POST">
 				<div class="form-input">
 					<input type="email" name="mail" placeholder="Adresse mail" value="<?php if(isset($mail)){ echo $mail; }?>" required/> 
 				</div>
 				<div class="form-input">
 					<input type="password" name="mdp" placeholder="Mot de passe" value="<?php if(isset($mdp)){ echo $mdp; }?>" required/>
 				</div>
 				<div><a href="pwdOublie.php">Mot de passe oublié ?</a></div><br>
 				<input type="submit"  value="connexion" class="btn-login"/>
 			</form>
 		</div>
	</body>
</html>