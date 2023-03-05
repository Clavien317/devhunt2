<?php
if(isset($_POST['enregistrer']))
{
    if(empty($_POST['nom']) and empty($_POST['pseudo']) and empty($_POST['matricule']) and empty($_POST['parcours']) and empty($_POST['niveau']) and empty($_POST['email']) and empty($_POST['tel']) and empty($_POST['pwd']))
    {
        echo "<script>alert('Il faut completer tout le champs');</script>";
    }
    else
    {

        $nom = $_POST['nom'];
        $prenom =$_POST['prenom'];
        $pseudo =$_POST['pseudo'];
        $matricule = $_POST['matricule'];
        $parcours =$_POST['parcours'];
        $niveau =$_POST['niveau'];
        $mail =$_POST['email'];
        $tel=$_POST['tel'];
        $pwd = $_POST['pwd'];
        $verifierpwd = $_POST['pwd2'];

        if($pwd = $verifierpwd)
        {
            include "conn.php";
            $qry = ("INSERT INTO inscription (nom,prenom,pseudo,parcours,niveau,matricule,email,telephone,password)
                  VALUES ('$nom','$prenom','$pseudo','$parcours','$niveau','$matricule','$mail','$tel','$pwd') ");
            $reponse = $conn ->prepare($qry);
            $reponse->execute();
            if($reponse)
            {
                echo "<script>alert('Inscription reussit');</script>";
                echo "<br><br><br><!DOCTYPE html> <html><body><h3>Vous pouvez vous connecter ...</h3><a href='login.php'>Se connecter... </a></body></html> <br><br><br>";

            }
            else
            {
                echo "<script>alert('NON ENREGISTRER !');</script>";
            }
        }
        else
        {
            echo "<script>alert('les mot de passe ne sont identique ! ');</script>";
        }

        
    }
}



?>