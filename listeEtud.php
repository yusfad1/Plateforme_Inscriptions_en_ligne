<!DOCTYPE HTML>
<html>
<head>
	<title>LISTE DES ETUDIANTS</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/styleListe.css">
	
</head>

<body>
	<center>
		<a href="accueil.php">ACCUEIL</a>
		<hr class="trait"><br>
		<h2>LISTE DES ETUDIANTS</h2>
		<form method="POST" action="BDD/traitListe.php">
                <label for="situation"> Cycle </label>
                <Select name="situation" id="situation">
                    <option value=" "></option>
                    <option value="Ingenieur">Ingénieurs d’Etat</option>
                    <option value="Master">Master</option>
                    <option value="Doctorat">Doctorat</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<label for="filiere"> Filière </label>
        		<select name="filiere" id="filiere" required>
                    <option value=" "> </option>
                    <option value="AF">Actuariat-Finance</option>
                    <option value="SE">Statistique-Economie Appliquée</option>
                    <option value="SD">Statistique-Démographie</option>
                    <option value="RO">Recherche Opérationnelle</option>
                    <option value="DSE">Ingénierie des Données et des Logiciels</option>
                    <option value="DS">Science des Données</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
                <label for="niveau"> Niveau </label>
        		<select name="niveau" id="niveau" required>
                    <option value=" "> </option>
                    <option value="1A">Ingénieurs d’Etat 1</option>
                    <option value="2A">Ingénieurs d’Etat 2</option>
                    <option value="3A">Ingénieurs d’Etat 3</option>
                    <option value="M1"> Master 1 </option>
                    <option value="M2"> Master 2 </option>
                    <option value="D1"> Doctorat 1 </option>
                    <option value="D2"> Doctorat 2 </option>
                    <option value="D3"> Doctorat 3 </option>
                    <option value="D4"> Doctorat 4 </option>
                </select><br><br>
			
			<input type="submit" value="Valider">

		</form>
		
	</center>
	

</body>
</html>