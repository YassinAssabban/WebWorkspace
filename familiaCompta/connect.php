<!DOCTYPE html>
<html>

<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="logo/monitor.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background: #cd6c6c;
	}

	* {
		box-sizing: border-box;
	}

	input[type=text],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}

	button:hover {
		opacity: 0.8;
	}

	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}

	.container {
		padding: 60px;
	}

	span.psw {
		float: right;
		padding-top: 16px;
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}

		.cancelbtn {
			width: 100%;
		}
	}

	hr {
		margin: 8px 0;
		width: 100%;
		border: 1px solid #4CAF50;
		margin-bottom: 30px;
	}
</style>

<body>
	<header>
	<div class="lisere">
			<a href="index.php"><img src="logoNDRA.png" class="logolis"></a>
		</div>
	</header>
	<?php
	// if (isset($_GET['login_err'])) {
	// 	$err = $_GET['login_err'];

	// 	switch ($err) {
	// 		case 'password':
	// 			
	?>
	<!-- <div class="alert alert-danger">
			 					<strong>Erreur</strong> mot de passe incorrect
			 				</div> -->
	<?php
	// 			break;

	// 			case 'email':
	// 			
	?>
	<!-- // 				<div class="alert alert-danger">
			// 					<strong>Erreur</strong> Email incorrect
			// 				</div> -->
	<?php
	// 		break;

	// 		case 'already':
	// 		
	?>
	<!-- // 				<div class="alert alert-danger">
			// 					<strong>Erreur</strong> compte non existant
			// 				</div> -->
	<?php
	// 		break;
	// 	}
	// }

	if (isset($_GET['login_err'])) {
		$err = $_GET['login_err'];

		if ($err = 'password') { ?>
			<div class="alert alert-danger">
				<strong>Erreur</strong> mot de passe incorrect
			</div><?php
				} elseif ($err = 'email') { ?>
			<div class="alert alert-danger">
				<strong>Erreur</strong> Email incorrect
			</div><?php
				} elseif ($err = 'already') { ?>
			<div class="alert alert-danger">
				<strong>Erreur</strong> compte non existant
			</div><?php
				}
			}

					?>
	<form action="connexion.php" method="post">
		<div class="container">
			<h1>Se connecter</h1>
			<hr>
			<label for="email"><b>Email</b></label>
			<br>
			<input type="text" placeholder="Enter Email" name="email" required>
			<br>
			<label for="psw"><b>Password</b></label>
			<br>
			<input type="password" placeholder="Enter Password" name="password" required>
			<br>
			<button type="submit">Login</button>
			<br>
			<hr>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Se souvenir de moi (HS)
			</label>
		</div>
		<div class="container" style="width: 60%; padding-top: 0px;">
			<button type="button" class="cancelbtn" href="index.php">Annuler</button>
			<span class="psw"><a href="#">Mot de passe oublié? (HS)</a></span>
		</div>
	</form>
	<div class="pousse-footer"></div>
	<footer>
		<p>Copyright © Made In Config. Inc.</p>
		<p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
		<p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
		<p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p>
	</footer>
</body>

</html>
<!-- https://www.youtube.com/watch?v=jEgzxXCB9-w&t=538s&ab_channel=NoS1gnal-->