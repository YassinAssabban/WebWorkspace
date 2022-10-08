<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ecrans 24"</title>
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
						  	<img src="img/periph/acer.png">
						    <div class="card">
						      <h3>Acer 23.6" LED - KG241Qbmiix</h3>
						      <br>
						      <p>Gagnez en confort avec le moniteur Acer KG241Qbmiix ! Grâce à son grand écran de 23.6 pouces avec résolution Full HD, il offre un grand confort visuel. Avec son temps de réponse rapide de 1 ms et sa compatibilité AMD Freesync, il offre aussi un excellent potentiel de fluidité.
						      </p>
						      <h1 class="price">119€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/periph/benq.png">
						    <div class="card">
						      <h3>BenQ 23.8" LED - GW2475H</h3>
						      <br>
						      <p>Parfaitement adapté aux besoins du quotidien, le moniteur BenQ GW2475H dévoilera rapidement toutes ses qualités pour améliorer votre productivité. Profitez d'une dalle IPS Full HD de 23.8 pouces, d'un design aux bords fins, d'un confort oculaire supérieur et d'une connectique pratique.</p>
						      <h1 class="price">119€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						   	<img src="img/periph/samsung.png">
						    <div class="card">
						      <h3>Samsung 24" LED - C24F396FHU</h3>
						      <br>
						      <p>Avec ce nouvel écran incurvé 24" Samsung C24F396FHU, vous entrez dans une nouvelle ère des expériences très immersives notamment à la courbure de 1800 mm et avec un rendu incroyablement profond du taux de contraste de 3000:1. Il intègre la technologie AMD Freesync et le Mode Jeu.</p>
						      <h1 class="price">139€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/periph/iiyama.png">
						    <div class="card">
						      <h3>iiyama 23.8" LED - G-Master G2470HSU-B1 Red Eagle</h3>
						      <br>
						      <p>L'écran iiyama G-Master G2470HSU-B1 Red Eagle vous assure la victoire ! La dalle Fast IPS 23.8 pouces à résolution Full HD s'accompagne de qualités gaming supérieures (0.8 ms, 165 Hz, FreeSync Premium) pour terrasser l'ensemble de vos adversaires.</p>
						      <h1 class="price">199€<sup class="cent">96</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">
						    </div>
						  </div>



			</div>
<!--
https://www.ldlc.com/fr-be/fiche/PB00231033.php
https://www.ldlc.com/fr-be/fiche/PB00354080.php
https://www.ldlc.com/fr-be/fiche/PB00212477.php
https://www.ldlc.com/fr-be/fiche/PB00395213.php

-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>