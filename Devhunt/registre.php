<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
    <script src="jquery.js"></script>
</head>
<body>
    <br>
    <marquee>Ecole Nationale d'informatique</marquee>
    <br>
    <br>
    <div class="container col-xs-4">
   <form action="" method="POST">
    <h1 class="titre">Formulaire d'inscription ...</h1>
    <br>
    <hr>
    <br>
    <div class="form-group">
    <br>
    <br>
                    <input type="text" class="form-control" name="nom" placeholder="Nom"> <br> <br>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom"> <br> <br>
                    <input type="text" class="form-control" name="pseudo" placeholder="Nom d'utilisateur"> <br> <br>
                    <input type="text" class="form-control" name="parcours" placeholder="Parcours"> <br> <br>
                    <input type="text" class="form-control" name="niveau" placeholder="Niveau"> <br> <br>
                    <input type="text" class="form-control" name="matricule" placeholder="Matricule">
                    <br>
                    <br>
                    <input type="email" class="form-control" name="email" placeholder="Email"> <br> <br>
                    <input type="tel" class="form-control" name="tel" placeholder="Telephone"> <br> <br>
                    <input type="text" class="form-control" name="pwd" placeholder="Mot de Passe"> <br> <br>
                    <input type="text" class="form-control" name="pwd2" placeholder="Confirmer Mot de Passe"> <br> <br>
                    <input type="submit" class="btn submit" name="enregistrer" value="Enregistrer">
                    <input type="reset" class="btn btn-danger" value="Effacher"><br> <br>
    </div>
    <br>
    <br>
   </form>
</div>

<?php

include "inscrir.php"

?>
</body>
</html>