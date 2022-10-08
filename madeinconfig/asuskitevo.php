<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Asus Kit Evo</title>
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
						  	<img src="img/kitevo/R5ASUSPRIME.png">
						    <div class="card">
						      <h3>Kit Upgrade PC AMD Ryzen 5 3600 ASUS PRIME B550M-A (Wi-Fi)</h3>
						      <br>
						      <p>L'association de la carte mère PRIME B550M-A Wi-Fi et du processeur AMD Ryzen 5 3600 avec son ventirad Wraith Stealth vous permettra de plonger dans l'univers envoûtant du jeu nouvelle génération sur PC.
						      </p>
						      <h1 class="price">395€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
					
						   <div class="column">
						   	<img src="img/kitevo/R7ASUSTUF.png">
						    <div class="card">
						      <h3>Kit Upgrade PC AMD Ryzen 7 2700X ASUS TUF B450-PLUS GAMING</h3>
						      <br>
						      <p>L'association de la carte mère ASUS TUF B450-PLUS GAMING et du processeur AMD Ryzen 7 2700X 8-Core vous permettra de plonger dans l'univers envoûtant du Jeu nouvelle génération sur PC.</p>
						      <h1 class="price">349€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						   	<img src="img/kitevo/I5FASUSPRIME.png">
						    <div class="card">
						      <h3>Kit Upgrade PC Core i5F ASUS PRIME Z490-P</h3>
						      <br>
						      <p>Améliorez les performances de votre PC Gamer avec ce kit upgrade PC Core i5F ASUS PRIME Z490-P pensé par LDLC. Il est composé d'une carte mère ASUS PRIME Z490-P et d'un CPU 10e génération Intel Core i5-10400F (2.9 GHz / 4.3 GHz).</p>
						      <h1 class="price">379€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/kitevo/I7ASUSTUF.png">
						    <div class="card">
						      <h3>Kit Upgrade PC Core i7K ASUS TUF GAMING Z490-PLUS</h3>
						      <br>
						      <p>Améliorez les performances de votre PC Gamer avec ce kit upgrade PC Core i7K ASUS TUF GAMING Z490-PLUS pensé par LDLC. Il est composé d'une carte mère ASUS TUF GAMING Z490-PLUS et d'un CPU 10e génération Intel Core i7-10700K (3.8 GHz/5.1 GHz).</p>
						      <h1 class="price">679€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
<!--
https://www.ldlc.com/fr-be/fiche/PB00354643.php
https://www.ldlc.com/fr-be/fiche/PB00274345.php
https://www.ldlc.com/fr-be/fiche/PB00348614.php
https://www.ldlc.com/fr-be/fiche/PB00348541.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>