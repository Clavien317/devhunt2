<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Se connecter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.min.js"></script>
       
    </head>
    <body>
        <br>
        <br>
        <br>
        <div class="container">
            <h1 class="titre">Se connecter</h1>
            <hr class="text-success"><br> <br>
            <div class="form-group">
            <br>
            <br>
                <form class="form-check" method="post">
                    <label class="label">Nom d'utilisateur</label>
                    <input type="text" class="form-control fa fa-user" name="pseudo" placeholder="Entrer nom d'utilisateur">
                     <br>
                     <br>
                     <label class="label">Mot de passe</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Entrer votre mot de passe"><br> <br>
                    <p><a class="text" href="#">Mot de passe oublier</a></p>
                    <br> 
                    <input type="submit" name="connecter" class="btn submit" value="Envoyer">
                    <input type="reset" class="btn btn-danger" value="Effacher">
                    <br>
                    <br>
                </form>
            </div>
            <br>
            <br>
        </div>
<?php

include "connecter.php";

?>
    </body>
</html>