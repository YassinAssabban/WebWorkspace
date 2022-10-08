<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ventirad PC</title>
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
						   	<img src="img/refroid/slim.png">
						    <div class="card">
						      <h3>be quiet! Pure Rock Slim</h3>
						      <p>Doté d'un ventilateur de 92 mm, le Pure Rock Slim n'excède jamais 25.4 dB, même lorsqu'il tourne à plein régime, soit à 2000 tours/min. Le ventilateur compte sept pales optimisées pour garantir un flux d'air maximal en limitant les turbulences qui peuvent s'avérer bruyantes.</p>
						      <h1 class="price">29€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/refroid/darkslim.png">
						    <div class="card">
						      <h3>be quiet! Dark Rock Slim</h3>
						      <p>Le Dark Rock Slim de be quiet! offre des performances de refroidissement exceptionnellement élevées de 180 W TDP et un fonctionnement quasi inaudible. Il est donc idéal pour toutes les configurations haut de gamme qui présentent un espace limité.</p>
						      <h1 class="price">62€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						 <div class="column">
						   	<img src="img/refroid/rock4.png">
						    <div class="card">
						      <h3>be quiet! Dark Rock 4</h3>
						      <p>Le Dark Rock 4 de Be Quiet! est la nouvelle itération du constructeur Allemande de son fer de lance en matière de ventirad. Au menu de cette nouvelle version, plus de performances, un montage facilité tout cela dans un silence de fonctionnement toujours aussi impeccable avec un SilentWings 135mm.</p>
						      <h1 class="price">76€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/refroid/pro4.png">
						    <div class="card">
						      <h3>be quiet! Dark Rock PRO 4</h3>
						      <p>Le DARK ROCK PRO 4 de be quiet! est un ventilateur processeur hautes performances au design spectaculaire. Silencieux et ultra-efficace, il se montre capable de dissiper la chaleur des plus hauts TDP (jusqu'à 250W), une aubaine pour les fans d'overclocking et les joueurs ultra-exigeants.</p>
						      <h1 class="price">89€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
	<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00216376.php
	https://www.ldlc.com/fr-be/fiche/PB00270932.php
	https://www.ldlc.com/fr-be/fiche/PB00248492.php
	https://www.ldlc.com/fr-be/fiche/PB00249200.php
-->				

<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>



