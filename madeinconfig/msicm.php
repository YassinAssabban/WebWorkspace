<?php session_start(); 
require_once 'config.php'; 


$proco = $bdd->query("SELECT * FROM produits WHERE category = 4");

$sql = $bdd->query("SELECT * FROM produits ORDER BY num_pro ");

if (isset($_POST['addProduct']))
{
  if(isset($_POST['num_pro']))
  {
	$ajout = $bdd->prepare("INSERT INTO panier(id_cli,num_pro) VALUES(?, ?)");
	$ajout->execute(array($_SESSION['user'], $_POST['num_pro']));
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>MSI Carte-Mère</title>
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
				<?php
				while ($row = $proco->fetch())
				{
				?>

					<div class="column">
					<img src="<?= $row['imgsource']; ?>">
					<div class="card">
					<h1><?= $row['marques_pro']; ?></h1>
					<p><?= $row['description']; ?></p>
					<h1><?= $row['prix_pro']; ?>€</h1><br>


				  <?php
				  if(isset($_SESSION['user']))
				  {
				  ?>
					<form method="POST" action="msicm.php">
					  <input type="hidden" name="num_pro" value="<?= $row['num_pro']; ?>">
					  <p><button type="submit" class="btnbasket" name="addProduct">Ajouter au panier</button></p>
					</form>
				  <?php
				  }else echo '<a href="connect.php"><button type="button">Ajouter au panier</button></a>';
				  ?>

				  </div>
				  </div>
				<?php
				}
				?>



			</div>
<!--
https://www.ldlc.com/fr-be/fiche/PB00347878.php
https://www.ldlc.com/fr-be/fiche/PB00347870.php
https://www.ldlc.com/fr-be/fiche/PB00257519.php
https://www.ldlc.com/fr-be/fiche/PB00257483.php
-->

<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>  
			</footer>
			</body>
</html>