<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Clavier</title>
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
						   	<img src="img/periph/razerclavier.png">
						    <div class="card">
						      <h3>Razer BlackWidow V3 TKL (switches Razer Green)</h3>
						      <br>
						      <p>Conçu spécifiquement pour le jeu, le Razer BlackWidow V3 TKL est un clavier compact armé de switches Razer Green afin de vous offrir une exécution précise avec une sensation tactile. Prenez ainsi facilement le dessus sur vos adversaires lors de duels.</p>
						      <h1 class="price">111€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/periph/logitechclavier.png">
						    <div class="card">
						      <h3> Logitech G Pro</h3>
						      <br>
						      <p>Foncez vers la victoire avec ce clavier Logitech G Pro. Au format TKL (sans pavé numérique), il est spécialement adapté pour les tournois et les parties endiablées. Ce clavier gaming est équipé des switches mécaniques tactiles avancés GX Blue pour un retour audible et tactile.</p>
						      <h1 class="price">129€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/periph/corsairclavier.png">
						    <div class="card">
						      <h3>Corsair Gaming K70 RGB MK.2 (Cherry MX Red)</h3>
						      <br>
						      <p>Imposez votre style sur les jeux PC grâce à toutes les qualités du clavier gamer Corsair Gaming K70 RGB MK.2. Ce modèle est doté d'un rétro-éclairage multicolore pour un style unique et de switches Cherry MX Red pour un jeu rapide et fluide.</p>
						      <h1 class="price">199€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						  	<img src="img/periph/steelclavier.png">
						    <div class="card">
						      <h3>SteelSeries Apex Pro</h3>
						      <br>
						      <p>Véritable bond en avant, le clavier SteelSeries Apex Pro vous permet de régler chaque touche en fonction de votre niveau de sensibilité préféré, que ce soit pour le gaming, le travail ou autre chose. Plus rapide et résistant que jamais, il sera l'arme ultime pour remporter des victoires.
						      </p>
						      <h1 class="price">259€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  



			</div>
<!--
	https://www.ldlc.com/fr-be/fiche/PB00377248.php
	https://www.ldlc.com/fr-be/fiche/PB00368437.php
	https://www.ldlc.com/fr-be/fiche/PB00252137.php
	https://www.ldlc.com/fr-be/fiche/PB00277286.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>