<!DOCTYPE HTML>

<html>

<head>
  <title>Supprimer</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/styleSupprimer.css">
</head>

<body>
<center>

	<a href="accueil.php">ACCUEIL</a><br><br>
  <hr class="trait"><br/>
  <img src="images/INSEA_logo.png" width="150" height="150">

	
  <h1>SUPPRIMER UN ETUDIANT</h1>
	
  <form name="supprimer" action="supprimer.php" method="POST">

        <label for="matricule">
            Entrez le matricule de l'étudiant
        </label><br><br>
		
	      <?php 
	    	  if(isset($_POST['matricule']))
	    	  { 
		      	include("BDD/traitSupprimer.php");
		      }
	      ?>
		   <br/> <br/>
       <input id="matricule" name="matricule" type="text" size="50" required><br><br>
       <input id="supprimer" name="suprimer" type="submit" value="Suprimer" style="width=100px"> 
  </form>

</center>




</body>
