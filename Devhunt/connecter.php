<?php

if(isset($_POST['connecter']))
{
    if(empty($_POST['pseudo']) and empty($_POST['pwd']))
    {
        echo "Il faut completer tout le champs";
    }
    else
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['pwd'];

        include "conn.php";
        $conn = new PDO("mysql:host=localhost;dbname=devhunt",'root','');
        $voir = ("SELECT * FROM inscription WHERE pseudo ='$pseudo' ");
        $reponse = $conn ->query($voir);
        if($donn = $reponse ->fetch())
        {
            echo '<h1> Bienvenue '.$donn['nom']."  ".$donn['prenom']."<br><br>";
            echo "Est ce que c'est bien toi? </h1> <br><br><button class='btn choix'><a class='oui' href='profil.php'>OUI</a></button> <button class='btn choix2'><a class='non' href=''>NON</a></button> ";
        }
        else
        {
            echo "<br><br><br><!DOCTYPE html> <html><body><h3>veillez inscrir d' abord !!</h3><a href='formulaire.php'>S'inscrir... </a></body></html> <br><br><br>";
        }
    }
}


?>