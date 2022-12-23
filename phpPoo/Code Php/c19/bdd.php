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
			
			// Connexion à la bdd test
			/*
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connexion à la bdd réussie <br/>";
			}
			*/
			
			// Création de la bdd test2
			/*
			try{
				$connexion = new PDO("mysql:host=$serveur", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$connexion->exec("CREATE DATABASE test2");
				echo "Nouvelle bdd créée";
			}
			*/
			
			//Création de la table
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connexion à la bdd réussie <br/>";
				
				$codesql = "CREATE TABLE Visiteurs (
					id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					nom VARCHAR(50) NOT NULL,
					prenom VARCHAR(50) NOT NULL,
					email VARCHAR(70)
					)";
				
				$connexion->exec($codesql);
				echo 'Table "Visiteurs" créée';
			}
			
			catch(PDOException $e){
				echo 'Echec de la connexion : '. $e->getMessage();
			}			
		?>
	</body>
</html>