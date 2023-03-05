<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEENI stack overflow</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
 <div class="header">
     <ul class="nav">
       <div class="teste">
         <li><a href="#footer" style="font-size: 25px;">Contacts</a></li>
         <li><a href="#footer" style="font-size: 25px;">Localisation</a></li>
         <li style="background-color: green; border-radius: 15px;"><a href="login.php">Se connecter</a></li>
         <li style="background-color: red; border-radius: 15px;margin-left: 0.2cm;"><a href="formulaire.php">S'inscrire</a></li>
        </div>
     </ul>
 </div>
<div id="cache"><a href="cache.html">&#x2630;</a></div>

 <div class="para">
       <img src="./image/logo.jpg" alt="" class="logo">
 </div>
 <br>
 <br>
</div>
<div class="container">
    <span class="text sec-text"></span>
    <br>
    <br>
    <br>
    <h1 id="titre"><span>Forum de développement pour les etudiant</span></h1>
</div>
<section class="container-fluid">
    <div class="blog-left">
     <img src="image/eni.jpg" alt="" class="eni"> 
    </div>
    <div class="blog-right">
     <p>L’Ecole Nationale d’Informatique, en abrégé ENI, est un établissement d’enseignement supérieur rattaché académiquement et administrativement à l’Université de Fianarantsoa.Le siège de l’Ecole se trouve à Tanambao- Antaninarenina à Fianarantsoa.L’ENI se positionne sur l’échiquier socio-éducatif malgache comme étant le plus puissant secteur de diffusion et de vulgarisation des connaissances et des technologies informatiques.Cette Ecole Supérieure peut être considérée aujourd’hui comme la vitrine et la pépinière des élites informaticiennes du pays.</p>
    <br>
     <a href="#"><button class="danger">En Savoir Plus</button></a>
 </div>
 </section>

<div class="div1">
    <p class="grand">Preparez votre avenir</p>
    <p class="grand">ici à Fianarantsoa</p>
    <p class="grand">à l'ENI.</p>
    <br><br>
    <p>A l'ENI tout les scientifiques ont ses</p>
    <p>place parceque tout le etudiant qui ont</p>
    <p>une bacc scientifique peut s'inscrire</p>
    <p>pour faire le concours d'entrer en première</p>
    <p>année dans l'école.</p>
</div>
<br>
<div class="div2">
    <img src="./image/notif.png" alt="" class="notif" width="60px">
    <h2><i>Le parcours GB : Genie </i></h2>
    <h2><i>Logicie et Base de Données</i></h2>
    <br>
    <p>Ce parcours est une parcours qui</p>
    <p>consiste à former les etudiants a </p>
    <p>devenir des professionnels en</p>
    <p>developpement web,mobile et desktop.</p>
</div>
<br>
<div class="div3">
    <img src="./image/notif.png" alt="" class="notif" width="60px">
    <h2><i>Parcours existant</i></h2>
    <h2><i>à l'ENI Fianarantsoa</i></h2>
    <br>
    <p>A l'ENI Fianarantsoa il existe</p>
    <p>trois Parcours depuis 40 années</p>
    <p>dont les trois sont: le parcours GB</p>
    <p>ASR et IG.</p>
</div>
<br>
<div class="div4">
    <img src="./image/notif.png" alt="" class="notif" width="60px">
    <h2><i>Parcours ASR:Administration </i></h2>
    <h2><i>Sytème et Réseau</i></h2>
    <br>
    <p>Ce parcours est specialisé a </p>
    <p>former les etudiants a devenir</p>
    <p>des administrateur système et</p>
    <p>bien etudier le securité.</p>
</div>
<br>
<div class="div5">
    <img src="./image/notif.png" alt="" class="notif" width="60px">
    <h2><i>Parcours IG:</i></h2>
    <h2><i>Informatique Général</i></h2>
    <br>
    <p>C'est le dernier parcours qui</p>
    <p>existe à l'ENI et c'est le parcours</p>
    <p>qui fait tout les matière que font</p>
    <p>les parcours GB et ASR.</p>
</div>
<br>
<section class="footer">
    <h2>Contacter nous</h2>
   <p>
    <span>
                    <h5  id="footer">G3VV+W9F, FIANARANTSOA</h5>
                    <p>Tanambao, Fianarantsoa, Madagascar</p>
                </span> 
                <span>
                    <h5>+261 34 90 302 48</h5>
                    <p>Lundi a Vendredi, 8h du matin a 5h du soir</p>
                </span> 
                <span>
                    <h5>ENIOFISIALY@gmail.com</h5>
                    <p>Notre email pour nous contacter</p>
                </span>
            </div>
   </p>
    <div>
        <a href=""><img  class="icons" src="image/icons8-facebook-30.png" alt=""></a>
        <a href=""><img  class="icons" src="image/icons8-instagram-30.png" alt=""></a>
        <a href=""><img  class="icons" src="image/icons8-mail-account-30.png" alt=""></a>
        <a href=""><img  class="icons" src="image/icons8-twitter-30.png" alt=""></a>
    </div> <br>
    <p>Made with <i class="fa fa-heart-o"></i> TEAM SCORPION </p>

</section>
    <script>
        const text = document.querySelector(".sec-text");

        const textLoad = ()=>{
            setTimeout(()=>{
                text.textContent = "Ecole Nationale D'Informatique";
            },0);
            setTimeout(()=>{
                text.textContent = "Pepinière des élites informatiques";
            },9700);

            setTimeout(()=>{
                text.textContent = "40 ème Anniversaire";
            },3970);
        }
        textLoad();
        setInterval(textLoad,16000)
    </script>
</body>
</html>