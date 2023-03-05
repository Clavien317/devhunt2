<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <script src="jquery.js"></script>
    <title>S'inscrir</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <br>
    <hr>
    <br>
    <form action="" method="post">
            
            <label for="">Nom</label> <span>*</span>
            <input type="text" name="nom" placeholder="Nom">
            <br>
            <br>
            <label for=""> Prenom</label><span>*</span>
            <input type="text" name="prenom" placeholder="Prenom">
            <br>
            <br>
            <label for="">Nom d'utilisateur</label> <span>*</span>
            <input type="text" name="pseudo" placeholder="exemple: kaot">
            <br> <br>
            <label for="">Parcours</label> <span>*</span>
            <input type="text" name="parcours" placeholder="GB,ASR...">
            <br> <br>
            <label for="">Niveau</label> <span>*</span>
            <input type="text" name="niveau" placeholder="exemple: L3">
            <br> <br>
            <label for="">Matricule</label> <span>*</span>
            <input type="text" name="matricule" placeholder="exemple: 0123">
            <br><br>
            <label for="">Email</label> <span>*</span>
            <input type="email" name="email" placeholder="nom@exemple.com">
            <br> <br>
            <label for="">Contact</label> <span>*</span>
            <input type="tel" name="tel" placeholder="+261...">
            <br>
            <br>
            <label for="">Mot de passe </label> <span>*</span>
            <input type="text" name="pwd" placeholder="***">
            <br>
            <br>
            <label for="">Confirmer votre mot de passe</label> <span>*</span>
            <input type="text" name="pwd2" placeholder="***">
            <br>
            <br>
            <br>
            <br>
            <button class="reset" type="reset">Effacher</button>
            <button class="submit" type="submit" name="enregistrer"> Enregistrer </button>
            <br>
            <br> 
    </form>

    <?php

    include "inscrir.php"
    ?>
</body>
</html>