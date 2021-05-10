<!DOCTYPE html>
<html>
	<head>
 		<title> Mot de passe oublié </title>
 		<link rel="stylesheet"  a href="style.css">
 		<link rel="stylesheet"  a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<meta charset="utf-8">
	</head>
	<body>
 		<div class="container">
 			<img src="images/loginStudent.png"/>
 			<p><?php if(isset($_POST['mail']))
                    include("BDD/traitpwd.php");
            ?></p>
 			<form method="POST">
 				<p>Saisir votre email :<p>
 				<div class="form-input">
 					<input type="email" name="mail" placeholder="Adresse mail"  required/> 
 				</div>
 				
 				<input type="submit"  value="Envoyer" class="btn-login"/>
 			</form>
 		</div>
	</body>
</html>