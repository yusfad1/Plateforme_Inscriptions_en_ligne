<?php
  require_once('BDD/connexionBDD.php');
  session_start(); 
  
  // S'il n'y a pas de session alors on ne va pas sur cette page
  if(!isset($_SESSION['studentmat'])){ 
    header('Location: login.php'); 
  }else{
    // On récupère les informations de l'utilisateur connecté
    $aff_profil = $connexion->query("SELECT * 
      FROM etudients 
      WHERE matricule ='".$_SESSION['studentmat']."'");
  
    $aff_profil = $aff_profil->fetch(); 

    $adresse="uploads/".$aff_profil['cycle']."/".$aff_profil['niveau']."/".$aff_profil['filiere']."/".$aff_profil['photo'];
  }
?>
<!DOCTYPE HTML>

<html>

<head>        
  <title>Profile</title>
  <meta charset="utf-8"/>
   <link rel="stylesheet" type="text/css" href="css/styleProfile.css">
</head>

<body>
    <div id="bloc_page" >
        <header>
           <div class="logo"><img src="images/INSEA_logo.png" width="150" height="150" alt="Logo de INSEA"></div>
           <h1>Institut National de Statistique et d'Economie Appliquée<h1>
        </header>

        <hr style="width: 100%; height: 10px">
        <div><a class="bouton1" href="changerpwd.php"><strong>Changer Mot de Passe</strong></a>
          <a class="bouton2" href="BDD/deconnectionL.php"><strong>    Deconnecter   </strong></a>
        </div>
         <center>
             <section>
                  <div><h2>profile:<h2></div><br>
                  <div id="photo"><img src="<?php echo $adresse ?>"></div><br>
                  <div><h2><?php echo $aff_profil['Nom']." ".$aff_profil['Prenom']  ?></h2></div><br><br>
                  <div>
                  <table  align="center" cellspacing="30" cellpadding="0">
                    <tr>
                      <td class="attr">Matricule :</td>
                      <td><?php echo $aff_profil['Matricule'] ?></td>
                    </tr>
                    <tr>        
                      <td class="attr">Nom : </td>
                      <td><?php echo $aff_profil['Nom'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Prenom : </td>
                      <td><?php echo $aff_profil['Prenom'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Date de naissance : </td>
                      <td><?= $aff_profil['dateNaiss'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Sexe : </td>
                      <td><?php echo $aff_profil['sexe'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Telephone : </td>
                      <td><?= $aff_profil['tel'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Email : </td>
                      <td><?php echo $aff_profil['email'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Cycle : </td>
                      <td><?php echo $aff_profil['cycle'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Filiere : </td>
                      <td><?php echo $aff_profil['filiere'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Niveau : </td>
                      <td><?php echo $aff_profil['niveau'] ?></td>
                    </tr>
                    <tr>
                      <td class="attr">Date d'inscription : </td>
                      <td><?php echo $aff_profil['dateCreation'] ?></td>
                    </tr>
                  </table>
                  <div>
                    <br><br>


             </section>
            </center>
              <hr style="width: 900px; height: 10px" >
                <footer>
                    <h2>Contact :<h3>
                    <p>Institut National de Statistique et d'Economie Appliquée<br>
                    B.P.:6217 Rabat-Instituts<br>
                    Tél : (212) 05 37 77 48 59/60<br>
                    Fax : (212) 05 37 77 94 57</p>
                </footer>
    </div>
</body>

</html>

<!--
  <ul>
                    <li><h3>Matricule         : <?php echo $aff_profil['Matricule'] ?></h3></li>
                    <li><h3>Email             : <?php echo $aff_profil['email'] ?></h3></li>
                    <li><h3>Cycle             : <?php echo $aff_profil['cycle'] ?></h3></li>
                    <li><h3>Filiére           : <?php echo $aff_profil['filiere'] ?></h3></li>
                    <li><h3>Niveau            : <?php echo $aff_profil['niveau'] ?></h3></li>
                    <li><h3>Sexe              : <?php echo $aff_profil['sexe'] ?></h3></li>
                    <li><h3>Telephone         : <?= $aff_profil['tel'] ?></h3></li>
                    <li><h3>Date de naissance : <?= $aff_profil['dateNaiss'] ?></h3></li>
                  </ul>
-->