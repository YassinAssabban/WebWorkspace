<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Kingston SSD</title>
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
						  	<img src="img/ssd/240gb.png">
						    <div class="card">
						      <h3>Kingston SSD A400 240 Go</h3>
						      <br>
						      <p>Le SSD A400 240 Go de Kingston améliore considérablement la réactivité de votre système actuel avec des vitesses de démarrage, de chargement et de transfert par rapport aux disques durs classiques. Il offre des vitesses lecture et d'écriture allant jusqu'à 500Mo/s et 350Mo/s.</p>
						     <h1 class="price">44€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						  	<img src="img/ssd/480gb.png">
						    <div class="card">
						      <h3>Kingston DC450R 480 Go</h3>
						      <br>
						      <p>Le Kingston DC450R est un disque SSD avec interface SATA 6Gbps à hautes performances basé sur des puces mémoire 3D TLC NAND, et conçu pour les charges de travail à lecture intensive. Ce disque SSD optimisé délivre des performances de haut niveau indispensables pour les SSD destinés aux datacenters.
						      </p>
						      <h1 class="price">119€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						  	<img src="img/ssd/1000gb.png">
						    <div class="card">
						      <h3>Kingston KC600 1 To</h3>
						      <br>
						      <p>Le SSD KC600 1 To de Kingston améliore considérablement la réactivité de votre système actuel. Il propose des vitesses de lecture et d'écriture allant jusqu'à 550 Mo/s et 520 Mo/s. Il supporte une suite de sécurité intégrale (TCG Opal, AES 256 bits, eDrive). 
						      </p>
						      <h1 class="price">164€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/ssd/2000gb.png">
						    <div class="card">
						      <h3>Kingston KC2500 2 To</h3>
						      <p>Le SSD Kingston KC2500 avec son interface M.2 PCIe 3.0 x4 NVMe propose des débits de 3500 Mo/s en lecture et 2900 Mo/s en écriture (suivant les modèles) et dispose de capacité à partir de 250 Go pour s'adapter aux besoins de votre PC ou de votre station de travail.</p>
						      <h1 class="price">529€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00228331.php
	https://www.ldlc.com/fr-be/fiche/PB00313543.php
	https://www.ldlc.com/fr-be/fiche/PB00279872.php
	https://www.ldlc.com/fr-be/fiche/PB00351655.php
-->
<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>