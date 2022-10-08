<!DOCTYPE html>
<html>
<title>Jatak Beer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="style.css">
<body>

    <div class="bgimg w3-display-container w3-text-white">
      <div class="w3-display-middle w3-jumbo">
        <p><img src="beer.png"></p>
      </div>
      <div class="w3-display-topleft w3-container w3-xlarge">
        <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">menu</button></p>
        <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">Acheter</button></p>
      </div>
      <div class="w3-display-bottomleft w3-container">
        <p class="w3-xlarge noir">Lundi - Vendredi | Samedi</p>
        <p class="w3-large noir">Belgique, Charleroi</p>
      </div>
    </div>

    <div id="menu" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black w3-display-container">
          <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
          <h1>Bière Simple</h1>
        </div>
        <div class="w3-container">
          <h5>Bière Blonde <b>2.60€</b></h5>
          <h5>Bière Fruitée <b>2.80€</b></h5>
        </div>
        <div class="w3-container w3-black">
          <h1>Packs</h1>
        </div>
        <div class="w3-container">
          <h5>Pack Blonde ( 4 Blondes ) <b>10.00€</b></h5>
          <h5>Pack Fruitée ( 4 Fruitées ) <b>10.00€</b></h5>
        </div>
      </div>
    </div>

    <div id="contact" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
          <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
          <h1>Acheter</h1>
        </div>
        <div class="w3-container">
          <p><b>Pour passer votre commande par mail veuillez cliquer sur le bouton ci-dessous.</b></p>
          <p><a href="mailto:Jatakbeer@hotmail.com?subject=Commande bière" class="w3-button w3-black">Commander</a></p>


        </div>
      </div>
    </div>

    </body>
    </html>