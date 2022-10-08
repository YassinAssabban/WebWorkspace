<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Souris</title>
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
						   	<img src="img/periph/steelsouris.png">
						    <div class="card">
						      <h3>SteelSeries Rival 3 Wireless (noir)</h3>
						      <br>
						      <p>Possédant une redoutable efficacité, la SteelSeries Rival 3 Wireless embarque un capteur optique de 18 000 dpi, 6 boutons programmables et un rétro-éclairage RGB personnalisable. Parfaitement adaptée pour une utilisation intensive, cette souris sans fil possède une autonomie longue durée.</p>
						      <h1 class="price">59€<sup class="cent">96</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/periph/corsairsouris.png">
						    <div class="card">
						      <h3>Corsair Gaming Harpoon RGB Wireless</h3>
						      <br>
						      <p>Prenez l'ascendant à l'aide de la souris Corsair Gaming Harpoon RGB Wireless. Ce modèle optique dispose d'une résolution de 10 000 DPI, de 6 boutons programmables, d'un rétroéclairage multicolore et d'un fonctionnement avec ou sans fil avec un poids plume de seulement 99 grammes.</p>
						      <h1 class="price">69€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/periph/logitechsouris.png">
						    <div class="card">
						      <h3>Logitech G Pro HERO</h3>
						      <br>
						      <p>Profitez d'une vitesse et une précision exceptionnelles avec la souris Logitech G Pro HERO. Spécialement conçue pour l'eSport, elle intègre un capteur optique Hero de 16 000 dpi pour que chaque mouvement puisse faire mouche.</p>
						      <h1 class="price">79€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						  	<img src="img/periph/razersouris.png">
						    <div class="card">
						      <h3>Razer Deathadder v2</h3>
						      <br>
						      <p>Avec la souris Razer DeathAdder v2, offrez-vous une arme redoutable pour venir à bout des plus coriaces adversaires. En effet, elle intègre un capteur optique Razer Focus+ de 20000 dpi afin de vous offrir une précision inégalée.
						      </p>
						      <h1 class="price">84€<sup class="cent">94</sup></h1><br>
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