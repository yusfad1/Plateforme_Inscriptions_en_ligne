<?php 
require_once('connexionBDD.php');
session_start();
    if ($_SESSION['student']) {
      header('Location: ./accueil.php');
    }
    if(isset($_POST['mail']))
    {
       if(empty($_POST['mail']))
       {
            echo "s'il vous plait saisir votre email !";
       }
       else
       {
            $verifier_email=$connexion->query("SELECT nom, prenom, email
              FROM etudients 
              WHERE email ='".$_POST['mail']."'");
            $verifier_email = $verifier_email->fetch();

            if(isset($verifier_email['email']))
            {
                $new_pwd = rand(10000,999999);
                
                $objet = 'Nouveau mot de passe';
                $to=$verifier_email['email'];
                //===== Création du header du mail.
                $header = "From: NOM_DE_LA_PERSONNE <no-reply@test.com> \n";
                $header .= "Reply-To: ".$to."\n";
                $header .= "MIME-version: 1.0\n";
                $header .= "Content-type: text/html; charset=utf-8\n";
                $header .= "Content-Transfer-Encoding: 8bit";
                //===== Contenu de votre message
                $contenu ="<html>".
                  "<body>".
                  "<p style='text-align: center; font-size: 18px'><b>Bonjour Mr, Mme".$verifier_email['nom']."</b>,</p><br/>".
                  "<p style='text-align: justify'><i><b>Nouveau mot de passe : </b></i>".$new_pwd."</p><br/>".
                  "</body>".
                  "</html>";

                //===== Envoi du mail
                mail($to, $objet, $contenu, $header);

                $changepwd=$connexion->prepare("UPDATE etudients SET mdp = :pwd WHERE email = :mail");
                $changepwd->execute(array('pwd' => $new_pwd,
                                          'mail' => $to));
 
                
                header("location: ./login.php");
            }
            else
            {
                echo "L'Adresse mail ou le mot de passe est incorrecte";
            }
       }
    }
    else
    {
        echo 'Probleme dans le serveur';
    }

?>


     