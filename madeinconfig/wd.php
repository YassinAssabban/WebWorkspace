<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Disques Western Digital</title>
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
						  	<img src="img/dd/blue.png">
						    <div class="card">
						      <h3>Western Digital WD Blue 1 To SATA 6Gb/s 64 Mo</h3>
						      <br>
						      <p>Augmentez la capacité de stockage de votre PC grâce aux disques durs WD Blue, une gamme conçue spécialement pour les PC de bureau et les PC tout-en-un. La famille WD Blue offre désormais une capacité de stockage allant jusqu'à 6 To.
						      </p>
						      <h1 class="price">47€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/dd/purple.png">
						    <div class="card">
						      <h3>Western Digital WD Purple Surveillance Hard Drive 1 To SATA 6Gb/s</h3>
						      <p>Les disques durs conçus pour la vidéosurveillance WD Purple offrent la technologie exclusive AllFrame pour vous apporter la meilleure fiabilité possible et plus de tranquillité d'esprit en installant le système de sécurité de votre maison ou de votre PME.</p>
						      <h1 class="price">54€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						<div class="column">
						  	<img src="img/dd/red.png">
						    <div class="card">
						      <h3>Western Digital WD Red 1 To SATA 6Gb/s</h3>
						      <br>
						      <p>Les disques durs WD Red offrent un large éventail de solutions pour les clients désireux de mettre en place un stockage NAS performant. Conçus pour les systèmes NAS comptant de 1 à 8 baies, les disques WD Red permettent de stocker la totalité de précieuses données.</p>
						     <h1 class="price">77€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						 <div class="column">
						  	<img src="img/dd/black.png">
						    <div class="card">
						      <h3>Western Digital WD Black Mobile 1 To</h3>
						      <br>
						      <p>Conçus pour les PC portables haut de gamme, le disque dur WD Black Mobile ultra performant associe capacité et vitesse afin de booster le PC sans remettre en question l'autonomie sur batterie ou le confort acoustique.
						      </p>
						      <h1 class="price">79€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>


			</div>
<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00199914.php
	https://www.ldlc.com/fr-be/fiche/PB00251790.php
	https://www.ldlc.com/fr-be/fiche/PB00133398.php
	https://www.ldlc.com/fr-be/fiche/PB00293631.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>