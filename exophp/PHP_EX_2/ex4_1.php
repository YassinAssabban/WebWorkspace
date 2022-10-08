<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 4 - 1 </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="exstyle.css">
	</head>
	<body>
		<center>
		<form method="POST" action="ex4_1.php">
			<legend>Introduisez vos informations</legend><br>
			<label>Nom : </label>
			<input type="text" name="nom"> <br>
			<label>En PHP, mon niveau est :</label>
			<label>Débutant : </label>
			<input type="radio" name="level" value="débutant">
			<label>Initié  : </label>
			<input type="radio" name="level" value="initié">
			<br>
			<input type="reset" value="Effacer">
			<input type="submit" value="Envoyer"><br>
		</form>
			<?php
				if (isset($_POST["level"])) {
					echo "<h1>Bonjour " . $_POST["nom"] . " vous etes " . $_POST["level"] . " en PHP</h1>";
				} else echo "<h2>Erreur entrez vos donnés</h2>";
			
			?>
		</center>
	</body>
</html>
			