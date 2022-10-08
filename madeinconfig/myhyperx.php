<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Mémoires HyperX</title>
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
						  	<img src="img/ram/hyperx16.png">
						    <div class="card">
						      <h3>HyperX Fury 16 Go (2 x 8 Go) DDR4 3000 MHz CL15</h3>
						      <br>
						      <p>La célèbre mémoire HyperX Fury revient avec un design actualisé du dissipateur de chaleur qui est aminci tout en gardant une efficacité redoutable Son style racé apporté par le dissipateur apporte une touche gaming assumée. Elle est compatible avec les processeurs Intel et AMD les plus récents.
						      </p>
						      <h1 class="price">94€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						   <div class="column">
						   	<img src="img/ram/hyperxrgb16.png">
						    <div class="card">
						      <h3>HyperX Fury RGB 16 Go (2x 8 Go) DDR4 3200 MHz CL16</h3>
						      <br>
						      <p>La mémoire DDR4 Fury RGB HyperX bénéficie d'une dissipation thermique largement améliorée pour optimiser la fiabilité et d'un style gaming assumé grâce à son dissipateur. Elle est également compatible avec les processeurs Intel et AMD les plus récents avec le style caractéristique Fury.</p>
						      <h1 class="price">99€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>
						  
						  <div class="column">
						   	<img src="img/ram/hyperx32.png">
						    <div class="card">
						      <h3>HyperX Fury 32 Go (4 x 8 Go) DDR4 3000 MHz CL15</h3>
						      <br>
						      <p>La célèbre mémoire HyperX Fury revient avec un design actualisé du dissipateur de chaleur qui est aminci tout en gardant une efficacité redoutable Son style racé apporté par le dissipateur apporte une touche gaming assumée. Elle est compatible avec les processeurs Intel et AMD les plus récents.</p>
						      <h1 class="price">186€<sup class="cent">95</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>

						  <div class="column">
						   	<img src="img/ram/hyperxrgb32.png">
						    <div class="card">
						      <h3>HyperX Fury RGB 32 Go (4x 8 Go) DDR4 3200 MHz CL16</h3>
						      <br>
						      <p>La mémoire DDR4 Fury RGB HyperX bénéficie d'une dissipation thermique largement améliorée pour optimiser la fiabilité et d'un style gaming assumé grâce à son dissipateur. Elle est également compatible avec les processeurs Intel et AMD les plus récents avec le style caractéristique Fury.</p>
						      <h1 class="price">214€<sup class="cent">94</sup></h1><br>
						      <input type="button" class="btnbasket" name="#" value="        AJOUTER AU PANIER  ">						    </div>
						  </div>



			</div>
<!-- 
https://www.ldlc.com/fr-be/fiche/PB00278062.php
https://www.ldlc.com/fr-be/fiche/PB00278071.php
https://www.ldlc.com/fr-be/fiche/PB00278086.php
https://www.ldlc.com/fr-be/fiche/PB00278063.php
https://www.ldlc.com/fr-be/fiche/PB00278088.php
https://www.ldlc.com/fr-be/fiche/PB00278094.php
-->

<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>
