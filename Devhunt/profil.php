<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/profil.css" rel="stylesheet">
    </head>
    <script src="jquery.js"></script>


    <body>
    <h1>Votre Profil</h1>
    <br>
    <!-- <br>
    <form method="post">
        <input type="text" name="matricule">
        <button name='valide'>Confirmer</button>
    </form> -->

<div id="profil">
    <?php
    include "conn.php";
    $reponse = $conn->query('SELECT * FROM inscription');
    while ($donn = $reponse->fetch())
    {
        ?>
        <div class="profil">
            <img class="pdp" src="./image/pdp.png" alt="">
            <h3><?php echo $donn['nom']."  ".$donn['prenom']  ?></h3>
            <p><?php echo $donn['pseudo']  ?></p>
            <h4><?php echo $donn['niveau']." ".$donn['parcours']." ".$donn['matricule']  ?></h4>
       </div>

    <?php

    }
    ?>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div id="pub">
            <img class="pdp1" src="./image/pdp.png" alt="">
            <br>
            <section>
                <form method="post">
                        <textarea rows="" cols="20" name="sujet" placeholder="Creer un publication..."></textarea>
                        <button name="pub">Creer</button>          
                </form>
            </section>
        </div>
        <?php

    if(isset($_POST['pub']))
    {
        include "conn.php";
        $reponse = $conn->query('SELECT * FROM inscription LIMIT 1');

    while ($donn = $reponse->fetch())
    {
        
        if(!empty($_POST['sujet']))
        {
            $pseudouser = $donn['pseudo'];
            $sujet = $_POST['sujet'];
            $date =date("d/m/Y");
            include "conn.php";
            $req = ("INSERT INTO pub (pseudouser,date,sujet) VALUES ('$pseudouser','$date','$sujet')");
            $result = $conn ->prepare($req);
            $result ->execute();
            if($result)
            {
                echo "Publier avec succes !";
            }
            else
            {
                echo "echec";
            }
        }else
        {
            echo "echec";
        }

    }

    }

        ?>

        <br>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <br>
        <div class="contenu">
            <br>
            <br>
            <br>
            <form method="post">
                <h1>TOUTE PUBLICATION</h1>
            <h1><button name="public">Voir publication</button></h1>
            </form>


            <?php
        if(isset($_POST['public']))
        {
            include "conn.php";

            $rep = $conn->query('SELECT * FROM pub');
            while ($donne = $rep->fetch())
            {
            
                echo "<h3>";
                echo $donne['pseudouser']."</h3>";
                echo "<p>date de publication :".$donne['date']."</p><br><br>";
                echo "<h2 class='sub'>".$donne['sujet']."</h2><br>";
               
        ?>
<h5>Commentaire</h5>
<form method="get">
    <textarea name="value" rows="" cols=""></textarea>
    <button type="submit" name="coms">Envoyer</button>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <button name="affiche">Afficher tout commentaire</button>
</form>

<br>
<br>
<hr>
<br>
<?php
    }
}
  ?>
           
<?php

if(isset($_GET['affiche']))
{
    include "conn.php";

    $repo = $conn->query('SELECT * FROM commentaire');
    while ($donnees = $repo->fetch())
    {
        echo "<div id='commentaire'>";
        echo "<h5>".$donnees['commentaire']." <button>Repondre</button></h5>";

        echo "</div>";
        
    }
}


?>


</div>
</div>


<?php

if(isset($_GET['coms']))
{
    if(empty($_GET['value']))
    {

    }else
    {
        $coms = $_GET['value'];
        $date = date("d/m/Y");
        $heure = date("H:i:s");

        include "conn.php";
        $query = ("INSERT INTO commentaire (commentaire,date,heure) VALUES ('$coms','$date','$heure')");
        $reponses = $conn ->prepare($query);
        $reponses->execute();
        if($reponses)
        {
            echo "commentaire envoyé";
        }
        else
        {
            echo "erreur d'envoie";
        }
    }
}

?>
    </body>
</html>