<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PhP et MySQL</title>
	</head>
	<body>
		<?php
			$serveur = "localhost";
			$login = "root";
			$pass = "root";
			
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$modif= "UPDATE Visiteurs SET email='alaryp@helha.be' WHERE id=2";
				//$modif= "DELETE FROM Visiteurs WHERE id=6";
				
				$requete = $connexion->prepare($modif);
				$requete->execute();
				echo "Informations mises à jour";
				
			}
			
			catch(PDOException $e){
				echo 'Echec de la connexion : '. $e->getMessage();
			}
		?>
	</body>
</html>