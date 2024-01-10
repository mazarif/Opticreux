<?php
    include './connectBdd.php';
    include './register.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript.js" async></script>
    <title>Opetit Creux</title>
</head>
  <body>
        <div id="p1">
          <div style="text-align: center;padding: center">
            <img  src="img\Opetit Creux(5).png" width="250" height = "140" alt="logo1">
            <img src="img\Opetit Creux(4).png"  width="250" height = "140"alt=" logo"> 
            <img  src="img\Opetit Creux(5).png" width="250" height = "140" alt="logo1">
          </div>
       </div>
          <div id="mySidenav" class="sidenav">
              <a id="closeBtn" href="#index.html" class="close">Accueil</a>
              <h1 class="titre">Opetit Creux</h1>
              <ul>
                <li><a href="#"> Carte</a></li>
                <li><a href="#"> Panier</a></li>
                <li><a href="allergenes.html">Allérgènes</a></li>
              </ul>
            </div>
          </div>
            <a href="#" id="openBtn">
              <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </a>     
    </header>
    <main>
      <div class="container" style="text-align: center">
        <div class="item">
          <img src="img\doner-viande-dans-pain-planche-bois_140725-2425.jpg" width="300" height="300" alt="kebab">
        </div>
        <div class="item">
          <img src="img\istockphoto-1387404042-612x612.jpg" width="700" height="300"alt="hamburger">
        </div>
      </div>
          <br>
          <br>
          <br>
        <div style="text-align: center">
          <h1 class="titre1">Opetit Creux est le restaurant idéal pour bien manger.</h1>
        </div>
          <br>
          <br>
          <br>
      <div class="container1" style="text-align: center" >
        <div class="item1">
         <img src="img\pexels-vilnis-husko-18188571.jpg" width="400" height="300"alt="hamburger">
        </div>
          <div class="item1" >
            <img src="img\images67.jpg" width="400" height="300"alt="wings">
          </div>
            <div class="item1">
              <img src="img\Sans titreàç_.jpg" width="400" height="300"alt="boisson">
            </div>
      </div>
        <br>
        <br>
        <br>
      <div style="text-align:center">
         <h2 id="texte">
             Des burgers savoureux,<br> 
             des tacos de rêve,<br>
             une viande kebab délicieuse. <br> 
             Entre amis et en famille,<br> 
        </h2>
      </div>
     </main>
      <br>
      <br>
      <br>
    <footer>
      <div id="footer">
         <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
        <div style="text-align: right" >
            <a id="mentions" href="mentionslegales.html#">Mentions légales</a>
            <br>
            <a id="client" href="espaceclient.html#">Espace-client</a>
        </div>
    </footer>
    
  </body>
</html>