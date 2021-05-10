<?php
  /*srand(time(0));*/
  include "connexionBDD.php";
 
  function moveFile($filename,$type){
    if (isset($_FILES[$filename]) AND $_FILES[$filename]['error'] == 0)
    {
      $fname="";
      // Testons si le fichier n'est pas trop gros
      if ($_FILES[$filename]['size'] <= 6000000)
      {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES[$filename]['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','pdf');

        $fname=$_POST['niveau'].'_'.$_POST['filiere'].'_'.$_POST['matricule'].'_'.$type.'.'.$extension_upload;

        if (in_array($extension_upload, $extensions_autorisees))
        {
          //il faut specifier l'addresse '../uploads' 
          move_uploaded_file($_FILES[$filename]['tmp_name'] , './uploads/'.$_POST['situation'].'/'.$_POST['niveau'].'/'.$_POST['filiere'].'/'.$fname);
        }
      }

      return $fname;

    }   
  }

  /*$matricule = $_POST['matricule'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $sexe = $_POST['sexe'];
  $dateNaiss = $_POST['naissance'];

  $nationalite= $_POST['nationalite'];
  $situation = $_POST['situation'];
  $filiere = $_POST['filiere'];
  $niveau = $_POST['niveau'];*/
  
  
  $reponse=$connexion->query('SELECT matricule FROM etudients WHERE matricule= \''.$_POST['matricule'].'\' ');
  if ($_POST['mdp'] <> $_POST['confmdp']) {
    echo "Fait attention : la confirmation du mot de passe ne correspond pas !";
  }
  elseif(!($donnee=$reponse->fetch())){

    $photoname=moveFile('photo','photo');
    $CINname=moveFile('CCIN','CIN');
    $BACname=moveFile('BAC','BAC');
    $attname=moveFile('Attestation','Attestation');
    
    $reponseEtudiant=$connexion->prepare('INSERT INTO etudients(Matricule,Nom,Prenom,email,tel,mdp,Nationalite,sexe,cycle,dateNaiss,filiere,niveau,photo,CIN,CopieBac,AttReussite,dateCreation) VALUES(:matricule ,:nom ,:prenom,:email,:tel,:mdp,:nationalite,:sexe,:cycle,:dateNaiss,:filiere,:niveau,:photoname,:CINname,:BACname,:attname,:datcreation)');

    $date_creation=date('Y-m-d H:i:s');
  
    $reponseEtudiant->execute(array(
                  'matricule' => $_POST['matricule'],
                  'nom' => $_POST['nom'] , 
                  'prenom' => $_POST['prenom'] ,
                  'email' => $_POST['email'] ,
                  'tel' => $_POST['telephone'] ,
                  'mdp' => $_POST['mdp'] ,
                  'nationalite' => $_POST['nationalite'] ,
                  'sexe' => $_POST['sexe'] ,
                  'cycle' => $_POST['situation'] ,
                  'dateNaiss' => $_POST['naissance'] , 
                  'filiere' => $_POST['filiere'] , 
                  'niveau' => $_POST['niveau'],
                  'photoname' => $photoname,
                  'CINname' => $CINname,
                  'BACname' => $BACname,
                  'attname' => $attname,
                  'datcreation' => $date_creation
                ));  
  
    echo '<p color="#FF0000">Inscription éffectué avec succèe</p> ';
  
    $reponseEtudiant->closeCursor();
  }
  else{
    echo '<h2 color="#FF0000">L\'étudiant de matricule '.$_POST['matricule'].' existe déjà.</h2> ';
  }
  
 
  
?>