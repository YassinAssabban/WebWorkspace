<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ecrans 28"</title>
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
						   	<img src="img/periph/iiyama28.png">
						    <div class="card">
						      <h3>iiyama 28" LED - ProLite X2888HS-B2</h3>
						      <br>
						      <p>Profitez d'un parfait confort visuel avec le moniteur iiyama ProLite X2888HS-B2 ! Équipé d'un superbe écran MVA Full HD de 28 pouces, il est capable d'afficher 95% de la gamme de couleurs NTSC. Le X2888HS-B2 est doté de la technologie VA qui offre une superbe reproduction des couleurs.</p>
						      <h1 class="price">219€<sup class="cent">96</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/periph/samsung28.png">
						    <div class="card">
						      <h3>Samsung 28" LED - U28E590D</h3>
						      <br>
						      <p>Avec son bel écran 28" parfaitement mis en valeur par un pied en métal haut de gamme, le moniteur Samsung U28E590D vous offre une qualité d'image exceptionnelle pour toutes vos utilisations. Pour cela, il s'appuie sur une résolution 3840 x 2160p à 60 Hz pouvant afficher jusqu'à 8 millions de pixels.</p>
						      <h1 class="price">259€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/periph/benq28.png">
						    <div class="card">
						      <h3>BenQ 28" LED - EL2870U</h3>
						      <br>
						      <p>Le moniteur BenQ 28" LED - EL2870U dispose de nombreuses technologies dédiées au gaming et au multimédia. Grâce à sa dalle TN très réactive, son contraste natif de 1000:1 et sa compatibilité HDR, votre contenu multimédia prend une nouvelle dimension et le jeu es encore plus immersif.</p>
						      <h1 class="price">299€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						  	<img src="img/periph/acer28.png">
						    <div class="card">
						      <h3> Acer 28" LED - Nitro XV280Kbmiiprx</h3>
						      <br>
						      <p>Profitez d'une qualité visuelle 4K HDR10 sur votre moniteur Acer XV280Kbmiiprx et partez pour une expérience visuelle intense et confortable. Ce modèle IPS de 28" dévoile des couleurs naturelles avec de larges angles de vision, un design épuré aux bords fins et une protection oculaire avancée.
						      </p>
						      <h1 class="price">419€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  



			</div>
<!--
	https://www.ldlc.com/fr-be/fiche/PB00214631.php
	https://www.ldlc.com/fr-be/fiche/PB00201959.php
	https://www.ldlc.com/fr-be/fiche/PB00252077.php
	https://www.ldlc.com/fr-be/fiche/PB00396649.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>