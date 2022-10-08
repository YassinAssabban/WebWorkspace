<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Samsung SSD</title>
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
						  	<img src="img/ssd/970evo.png">
						    <div class="card">
						      <h3>Samsung SSD 970 EVO Plus M.2 PCIe NVMe 250 Go</h3>
						      <br>
						      <p>Le Samsung 970 EVO Plus M.2 PCIe 3.0 4x NVMe 1.3 dans sa version 250 Go transporte votre PC dans un autre niveau de performances grâce à ses vitesses pouvant atteindre 3.5 Go/s en lecture et 2.3 Go/s en écriture et propose un cache LPDDR4 de 512 Mo.
						      </p>
						      <h1 class="price">84€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/ssd/980pro.png">
						    <div class="card">
						      <h3>Samsung SSD 980 PRO M.2 PCIe NVMe 500 Go</h3>
						      <p>Le disque SSD 980 PRO 500 Go de Samsung permet de métamorphoser les performances et la réactivité de votre machine. Bénéficiant de vitesses stratosphériques et d'une endurance très élevée, le Samsung 980 PRO s'appuie sur l'interface PCI-E 4.0 x4 ainsi que sur la technologie NVMe 1.3c.</p>
						      <h1 class="price">189€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						<div class="column">
						  	<img src="img/ssd/860pro.png">
						    <div class="card">
						      <h3>Samsung SSD 860 PRO 1 To</h3>
						      <br>
						      <p>Alimenté par la technologie V-NAND et un contrôleur basé sur un algorithme solide, le SSD 860 PRO est spécialement conçu pour supporter les lourdes charges de travail que peuvent connaître les ordinateurs haut de gamme, les postes de travail et les NAS (serveur de stockage en réseau).</p>
						     <h1 class="price">329€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						 <div class="column">
						  	<img src="img/ssd/870qvo.png">
						    <div class="card">
						      <h3>Samsung SSD 870 QVO 2 To</h3>
						      <br>
						      <p>Grande fiabilité, capacité de stockage de 1 à 8 To, vitesses supérieures, le disque SSD 870 QVO signé Samsung affirme son potentiel une fois installé dans votre ordinateur ! Porté par la technologie V-NAND et le contrôleur MKX basé sur l'algorithme ECC, ce modèle se montre fiable et performant.
						      </p>
						      <h1 class="price">289€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>


			</div>
<!-- 
	https://www.ldlc.com/fr-be/fiche/PB00265389.php
	https://www.ldlc.com/fr-be/fiche/PB00383677.php
	https://www.ldlc.com/fr-be/fiche/PB00243280.php
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