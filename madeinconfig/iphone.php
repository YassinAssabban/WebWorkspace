<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Iphone's</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="logo/monitor.png" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<header>
		<div class="lisere">
			<a href="index.php"><img src="logo/logo2.png" class="logolis"></a>
			<a href="panier.php" class="panier"><img src="logo/basket.png" width="40px" height="40px"></a>
		</div>
		<nav>
					<div class="navbar">
								  <a href="index.php">Accueil</a>
								  <a href="news.php">News</a>
						<div class="dropdown">
								    <button class="dropbtn">Composants
								      <i class="fa fa-caret-down"></i>
								    </button>
							<div class="dropdown-content">
								    <div class="header">
								        <h2>Composants</h2>
								    </div>   
								<div class="row-nav">
									<div class="column-nav">
								 		<h3>Composants PC</h3>
								   		<a href="proco.php">Processeur</a>
								   		<a href="cm.php">Carte mère</a>
							    		<a href="kitevo.php">Kit Evo</a>
									</div>
									<div class="column-nav">
										<h3 class="cacherpoint">.</h3>
										<a href="memoire.php">Mémoire</a>
										<a href="cg.php">Carte Graphique</a>
										<a href="boitierpc.php">Boitier</a>
									</div>
									<div class="column-nav">
										<h3 class="cacherpoint">.</h3>
									  	<a href="alim.php">Alimentation</a>
										<a href="ssd.php">SSD</a>
										<a href="disquedur.php">Disque Dur</a>
									</div>
									<div class="column-nav">
										<h3>Refroidissement PC</h3>
									  	<a href="ventil.php">Ventilateur PC</a>
										<a href="ventir.php">Ventirad PC</a>
										<a href="water.php">Watercooling</a>
									</div>
								</div>
							</div>
						</div> 
						<div class="dropdown">
								    <button class="dropbtn">Produits
								      <i class="fa fa-caret-down"></i>
								    </button>
							<div class="dropdown-content">
								    <div class="header">
								        <h2>Produits</h2>
								    </div>   
								<div class="row-nav">
									<div class="column-nav">
								   		<h3>Périphériques</h3>
								   		<a href="screen.php">Ecran PC</a>
               							<a href="clavier.php">Clavier</a>
               							<a href="mouse.php">Souris</a>
									</div>
									<div class="column-nav">
										<h3>Apple</h3>
										<a href="macbook.php">Macbook</a>
              							<a href="ipad.php">Ipad</a>
              							<a href="iphone.php">Iphone</a>
									</div>
									<div class="column-nav">
									</div>
									<div class="column-nav">
									</div>
								</div>
							</div>
						</div>
						<?php
									session_start();

									if(empty($_SESSION['user'])) {
										echo "
										<div class=\"connect\"><a href=\"signUp.php\">Sign Up</a></div>
										<div class=\"connect\"><a href=\"connect.php\">Sign In</a></div> ";
									} else {
										$sess = $_SESSION['user'];
										echo "<div class=\"connect\"><a href=\"#\">Bonjour ";
										echo "$sess";
										echo "!</a></div> <div class=\"connect\"><a href=\"deconnexion.php\">Deconnexion</a></div>";
									}

								?>

								<div class="search-container">
							    	<form action="/action_page.php">
							      		<input type="text" placeholder="Search.." name="search">
							     	 	<button type="submit"><i class="fa fa-search"></i></button>
							    	</form>
							  </div>
					</div>
		</nav>
	</header>
    	<div class="row">
						  
						  <div class="column">
						  	<img src="img/apple/11.png">
						    <div class="card">
						      <h3>Apple iPhone 11 64 Go Noir</h3>
						      <br>
						      <p>Conçu pour élargir vos horizons, l'iPhone 11 d'Apple vous séduira en un rien de temps. Arborant des matériaux de haute qualité, il vous en mettra plein les yeux grâce à son magnifique écran Liquid Retina HD de 6.1 pouces à résolution 828 x 1792 pixels.
						      </p>
						      <h1 class="price">689€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/apple/12mini.png">
						    <div class="card">
						      <h3>Apple iPhone 12 mini 64 Go Noir</h3>
						      <br>
						      <p>L'iPhone 12 mini repousse toutes les limites du possible avec la connectivité 5G ultra-rapide. La puce A14 Bionic, la plus rapide sur smartphone. Un nouveau double appareil photo. Et un magnifique écran Super Retina XDR, pour ne pas passer à côté du moindre détail.</p>
						      <h1 class="price">809€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						   	<img src="img/apple/11pro.png">
						    <div class="card">
						      <h3>Apple iPhone 11 Pro 64 Go Gris Sidéral</h3>
						      <br>
						      <p>Premier iPhone à décrocher l'appellation Pro, l'Apple iPhone Pro va vous en mettre plein les yeux. Avec sa finition exceptionnelle et son design en verre et acier inoxydable, il vous laissera sans voix. Pour cela, il peut s'appuyer sur son magnifique écran OLED Super Retina XDR de 5.8 pouces.</p>
						      <h1 class="price">1 059€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/apple/12promax.png">
						    <div class="card">
						      <h3>Apple iPhone 12 Pro Max 128 Go Graphite</h3>
						      <br>
						      <p>iPhone 12 Pro Max. Avec la 5G ultra-rapide. La puce A14 Bionic, la plus rapide sur smartphone. Et un système photo pro qui révolutionne la prise de vues en conditions de faible éclairage. C'est un bond en avant incroyable.</p>
						      <h1 class="price">1 259€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
<!--

https://www.ldlc.com/fr-be/fiche/PB00277575.php
https://www.ldlc.com/fr-be/fiche/PB00387537.php
https://www.ldlc.com/fr-be/fiche/PB00277605.php
https://www.ldlc.com/fr-be/fiche/PB00387518.php

-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>