<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Disques Seagate</title>
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
						  	<img src="img/dd/barracuda.png">
						    <div class="card">
						      <h3>Seagate BarraCuda 1 To (ST1000DM010)</h3>
						      <br>
						      <p>Optez pour une grande capacité de stockage avec le disque dur Seagate BarraCuda 1 To. Cette gamme domine le marché en proposant les meilleures capacités pour les ordinateurs de bureau et périphériques mobiles. Ces disques conviennent parfaitement aux mises à niveau et à tous les budgets.
						      </p>
						      <h1 class="price">51€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/dd/skyhawk.png">
						    <div class="card">
						      <h3>Seagate SkyHawk 1 To</h3>
						      <p>Optimisés pour les magnétoscopes numériques et enregistreurs vidéo en réseau, les disques de surveillance SkyHawk 1 To sont conçus pour les charges de travail continues.</p>
						      <h1 class="price">56€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						<div class="column">
						  	<img src="img/dd/ironwolf.png">
						    <div class="card">
						      <h3>Seagate IronWolf 1 To</h3>
						      <br>
						      <p>Que vous soyez particuliers ou professionnels créatifs, pour une utilisation au bureau ou à domicile, le disque dur pour NAS Seagate IronWolf 1 To est la solution de stockage qu'il vous faut. Il est optimisé AgileArray pour les solutions NAS et adapté à un usage NAS 1 à 8 baies.</p>
						     <h1 class="price">71€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						 <div class="column">
						  	<img src="img/dd/firecuda.png">
						    <div class="card">
						      <h3>Seagate FireCuda SSHD 1 To</h3>
						      <br>
						      <p>Vous détestez attendre que votre application ou votre jeu se charge ? FireCuda combine la technologie SSD à un disque dur traditionnel pour obtenir des performances similaires à celles d'un disque SSD, tout en proposant des capacités caractéristiques des disques standard.
						      </p>
						      <h1 class="price">74€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>


			</div>
<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00214983.php
	https://www.ldlc.com/fr-be/fiche/PB00214995.php
	https://www.ldlc.com/fr-be/fiche/PB00214990.php
	https://www.ldlc.com/fr-be/fiche/PB00218113.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>