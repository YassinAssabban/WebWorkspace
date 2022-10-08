<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Mémoires Corsair</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="logo/monitor.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
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
										<h3>Apple</h3></a>
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
						  	<img src="img/ram/corsairpro16.png">
						    <div class="card">
						      <h3>Corsair Vengeance RGB PRO Series 16 Go (2x 8 Go) DDR4 3000 MHz CL15</h3>
						      <br>
						      <p>Les mémoires PC haut de gamme Vengeance RGB PRO Series de Corsair proposent les meilleures performances et stabilité pour les plateformes nouvelle génération avec un fort potentiel d'overclocking. Elles vous offrent également un éclairage RGB multizone dynamique hypnotisant.
						      </p>
						      <h1 class="price">109€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/ram/corsairlpx16.png">
						    <div class="card">
						      <h3>Corsair Vengeance LPX Series Low Profile 16 Go (2x 8 Go) DDR4 3200 MHz CL16</h3>
						      <br>
						      <p>Avec la nouvelle gamme de mémoires PC haut de gamme Vengeance LPX Series, Corsair propose des solutions stables et performantes pour les plateformes nouvelle génération avec en prime un fort potentiel d'overclocking.</p>
						      <h1 class="price">93€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						   	<img src="img/ram/corsairpro32.png">
						    <div class="card">
						      <h3>Corsair Vengeance RGB PRO Series 32 Go (4x 8 Go) DDR4 3000 MHz CL15</h3>
						      <br>
						      <p>Les mémoires PC haut de gamme Vengeance RGB PRO Series de Corsair proposent les meilleures performances et stabilité pour les plateformes nouvelle génération avec un fort potentiel d'overclocking. Elles vous offrent également un éclairage RGB multizone dynamique hypnotisant.</p>
						      <h1 class="price">241€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/ram/corsairlpx32.png">
						    <div class="card">
						      <h3>Corsair Vengeance LPX Series Low Profile 32 Go (4x 8 Go) DDR4 3200 MHz CL16</h3>
						      <br>
						      <p>Avec la nouvelle gamme de mémoires PC haut de gamme Vengeance LPX Series, Corsair propose des solutions stables et performantes pour les plateformes nouvelle génération avec en prime un fort potentiel d'overclocking.</p>
						      <h1 class="price">189€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
<!-- 
https://www.ldlc.com/fr-be/fiche/PB00253230.php
https://www.ldlc.com/fr-be/fiche/PB00229383.php
https://www.ldlc.com/fr-be/fiche/PB00250971.php
https://www.ldlc.com/fr-be/fiche/PB00242264.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>