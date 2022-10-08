<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Boitier PC</title>
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
						  	<img src="img/boitier/btzalman.png">
						    <div class="card">
						      <h3>Zalman M3</h3>
						      <br>
						      <p>Compact et élégant, le boîtier Zalman M3 est un boîtier PC Mini Tour qui offrira à vos composants un volume optimal pour allier performances et refroidissement efficace. Appréciez sa fenêtre en verre trempé, ses nombreux emplacements pour ventilateurs 120 mm et une prise en charge watercooling.
						      </p>
						      <h1 class="price">65€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/boitier/btkolink.png">
						    <div class="card">
						      <h3>Kolink Stronghold</h3>
						      <br>
						      <p>Le boitier Kolink Stronghold avec sa fenêtre en verre trempé et sa façade noire épurée va vous permettre de monter la configuration de vos rêves ! Véritable écrin dans un boitier à effet brossé, vous pourrez monter un PC complet au format E-ATX, ATX, Micro-ATX ou Mini-ITX avec une VGA de 380 mm.</p>
						      <h1 class="price">49€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						  	<img src="img/boitier/btnzxt.png">
						    <div class="card">
						      <h3>NZXT H510 Noir/Rouge</h3>
						      <br>
						      <p>Tout comme les autres boîtiers de la série H de NZXT ce boîtier H510 est conçu pour la performance et le silence. Élégant avec son panneau en verre trempé, il est prêt à accueillir la configuration de vos rêves. Il peut recevoir une carte mère au format Mini-ITX, Micro ATX ou ATX... 
						      </p>
						      <h1 class="price">89€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>


						  <div class="column">
						  	<img src="img/boitier/btbequiet.png">
						    <div class="card">
						      <h3>be quiet! Pure Base 500 Window (Gris)</h3>
						      <br>
						      <p>Le be quiet! Pure Base 500 Window est un boitier moyen tour avec une conception pensée pour le silence et qui vous permet d'assembler presque toutes les configurations en se basant sur une carte mère mini-ITX, micro-ATX ou ATX grâce à son espace intérieur optimisé.
						      </p>
						      <h1 class="price">97€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>


			</div>
<!--
https://www.ldlc.com/fr-be/fiche/PB00256642.php
https://www.ldlc.com/fr-be/fiche/PB00273040.php
https://www.ldlc.com/fr-be/fiche/PB00278505.php
https://www.ldlc.com/fr-be/fiche/PB00286866.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>
