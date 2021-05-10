<!DOCTYPE HTML>

<html>

    <head>
      <title>Insription</title>
      <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="css/inscriptionStyle.css">
    </head>

<body>
    
    <div class="bloc_page">
    
        <a href="accueil.php">ACCUEIL</a>
        
        <h1>INSCRIPTION</h1>

        <hr size="50" color="#008000">
        <center class="ctrz">
            
            <?php if(isset($_POST['matricule']))
                    include("BDD/traitInscription.php");
                    echo '<br>';
            ?>
            <h3>* = Champ obligatoire</h3>
            <form method="POST" action="Inscription.php" enctype="multipart/form-data">

                <label for="matricule" class="identifie"> Matricule* </label><br>
                <input type="text" name="matricule" id="matricule" placeholder="Ex:E2016001" size="80%" autofocus maxlength="20" required><br/><br>

                <label for="nom" class="identifie"> Nom* </label><br>
                <input type="text" name="nom" id="nom" placeholder="Ex:Ahmed"size="80%" required><br/><br>

                <label for="prenom" class="identifie"> Prenom* </label> <br>
                <input type="text" name="prenom" id="prenom" placeholder="Ex:El Ayoubi"size="80%" required ><br/><br>

                <label for="email" class="identifie"> Email </label><br>
                <input type="email" name="email" id="email"placeholder="Ex:ahmed.aoubi@gmail.com"size="80%" required=""><br/><br>

                <label for="telephone" class="identifie">Téléphone </label><br>
                <input type="tel" name="telephone" id="telephone" placeholder="Ex:0642145154" size="80%" required><br/><br>

                <label for="mdp" class="identifie"> Mot de passe* </label><br>
                <input type="password" placeholder="******" name="mdp" id="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" size="80%" required><br><br>

                <label for="confmdp" class="identifie"> Confirmer le Mot de passe* </label><br>
                <input type="password" placeholder="******" name="confmdp" id="confmdp" size="80%" required><br><br>

              
               <div>
                   <div class="liste">
                       <label for="nationalite">Nationalité*</label><br>
                       <select name="nationalite" id="nationnalite">
                            <option value=" "> </option>
                            <option value="Marocain(e)"> Marocain(e)</option>
                            <option value="Etrangère"> Etrangère</option>
                        </select>
                   </div>

                    <div class="liste">
                        <label for="sexe"> Sexe* </label><br>
                        <Select name="sexe" id="sexe">
                            <option value=" "> </option>
                            <option value="M">Masculin</option>
                            <option value="F">Feminin</option>
                        </select>
                    </div>

                    <div class="liste">
                        <label for="situation">Cycle*</label><br>
                        <Select name="situation" id="situation">
                            <option value=" "></option>
                            <option value="Ingenieur">Ingénieurs d’Etat</option>
                            <option value="Master">Master</option>
                            <option value="Doctorat">Doctorat</option>
                        </select>
                    </div>

                    <div class="liste">
                        <label for="naissance">Date de naissance*</label><br>
                        <input type="date" name="naissance" id="naissance" placeholder="Ex:AA-MM-JJ">
                    </div>
                </div><br>

                <div class="liste">
                    <label for="filiere"> Filière* </label><br>
                    <select name="filiere" id="filiere">
                        <option value=" "> </option>
                        <option value="AF">Actuariat-Finance</option>
                        <option value="SE">Statistique-Economie Appliquée</option>
                        <option value="SD">Statistique-Démographie</option>
                        <option value="RO">Recherche Opérationnelle</option>
                        <option value="DSE">Ingénierie des Données et des Logiciels</option>
                        <option value="DS">Science des Données</option>
                    </select>
                </div>


                <div class="liste">
                    <label for="niveau"> Niveau* </label><br>
                    <select name="niveau" id="niveau">
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
                    </select>
                </div><br><br>
                <div class="liste" >
                  <label for="photo"> Photo* </label><br>
                  <input type="file" name="photo" id="photo">
                </div>
                <div class="liste" >
                  <label for="CCIN"> Copie de la CIN* </label><br>
                  <input type="file" name="CCIN" id="CCIN">
                </div><br><br>
                <div class="liste" >
                  <label for="BAC"> Copie du Baccalauréat* </label><br>
                  <input type="file" name="BAC" id="BAC">
                </div>
                <div class="liste" >
                  <label for="Attestation"> Attestation de réussite* </label><br>
                  <input type="file" name="Attestation" id="Attestation">
                </div><br><br>

              



                <p><input type="submit" value="  Valider " class="envoie">

                <input type="reset" value="Mettre à zero" class="envoie"></p>

            <form>
        </center>

    </div>
</body>
</html>
