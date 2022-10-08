<?php  session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="monitor.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>

<style>
body {
  font-family: Arial;
  font-size: 17px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  padding: 8px;
  width: 100%;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #A1C3A3;
  padding: 5px 20px 15px 20px;
  border: 1px solid #A1C3A3;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #A1C3A3;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #45a049;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #137E1A;
}

a {
  color: #137E1A;
}

hr {
  border: 1px solid #137E1A;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
	flex-direction: column-reverse;
  }
  .col-25 {
	margin-bottom: 20px;
  }
}
</style>
	<header>
		<div class="lisere">
			<a href="index.php"><img src="logo/logo2.png" class="logolis"></a>
		</div>
	</header>
	<body>
			<br>
			<h2 style="left:20%;">Confirmation de commande de <?php $sess = $_SESSION['user']; echo $sess; ?></h2>
			<p>test </p> 
			<br>
			<! <br>
				<div class="row">
				<div class="col-75">
					<div class="container">
					<form action="checkoutLanding.php" method="post">
						<div class="row">
						<div class="col-50">
							<h3>Adresse de Facturation</h3>
							<label for="fname"><i class="fa fa-user"></i> Nom Entier</label>
							<input type="text" id="fname" name="fullname" placeholder="John Doe">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" id="email" name="email" placeholder="john@example.com">
							<label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
							<input type="text" id="adr" name="address" placeholder="Rue du Moulin 7">
							<label for="city"><i class="fa fa-institution"></i> Ville</label>
							<input type="text" id="city" name="city" placeholder="Bruxelles">
							<label for="zip">Code postale</label>
							<input type="text" id="zip" name="zip" placeholder="1080">
						</div>

						<div class="col-50">
							<h3>Paiment</h3>
							<label for="fname">Cartes Acceptées</label>
							<div class="icon-container">
							<i class="fa fa-cc-visa" style="color:navy;"></i>
							<i class="fa fa-cc-amex" style="color:blue;"></i>
							<i class="fa fa-cc-mastercard" style="color:red;"></i>
							<i class="fa fa-cc-discover" style="color:orange;"></i>
							</div>
							<label for="cname">Nom sur la Carte</label>
							<input type="text" id="cname" name="cardname" placeholder="John More Doe">
							<label for="ccnum">Chiffre de la Carte</label>
							<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
							<label for="expmonth">Mois d'Expiration</label>
							<input type="text" id="expmonth" name="expmonth" placeholder="September">
							<div class="row">
							<div class="col-50">
								<label for="expyear">Année d'Expiration</label>
								<input type="text" id="expyear" name="expyear" placeholder="2018">
							</div>
							<div class="col-50">
								<label for="cvv">CVV</label>
								<input type="text" id="cvv" name="cvv" placeholder="352">
							</div>
							</div>
						</div>

						</div>
						<label>
						<input type="checkbox" checked="checked" name="sameaddress"> Livré à la même adresse que la facturation
						</label>
						<a href="checkoutLanding.php"><input type="submit" value="Validé" class="btn"></a>
					</form>
					</div>
				</div>
			<footer>
			        <p>Copyright © Made In Config. Inc.</p>
			        <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
			        <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
			        <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>

			</footer>
			</body>
</html>
