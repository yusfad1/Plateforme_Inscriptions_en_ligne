<?php 
    require_once('connexionBDD.php');
    session_start();
    if(isset($_POST['mail']))
    {
       if(empty($_POST['mail']) || empty($_POST['mdp']))
       {
            echo "Remplir tous les champs";
       }
       else
       {
            $sql="select * from etudients where email='".$_POST['mail']."' and mdp='".$_POST['mdp']."'";
            $req = $connexion->query($sql);
            $req = $req->fetch();

            if($req)
            {
                $_SESSION['studentmat']=$req['Matricule'];
                header("location: ./profile.php");
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


     