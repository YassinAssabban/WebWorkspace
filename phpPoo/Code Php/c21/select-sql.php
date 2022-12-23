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
				
				// Sélection de tous les enregistrements
				/*
				$requete = $connexion->prepare("SELECT * FROM Visiteurs");
				$requete->execute();
				$resultat = $requete->fetchall();
				
				echo '<pre>';
				print_r($resultat);
				echo '</pre>';
				*/
				
				// Ajout d'une colonne sexe
				/*
				$requete = "ALTER TABLE Visiteurs ADD sexe VARCHAR(1)";
				$connexion->exec($requete);
				*/
				
				// Sélection de certaines colonnes 
				// de certains enregistrements
				$requete = $connexion->prepare(
				"SELECT prenom FROM Visiteurs WHERE sexe = 'H' ORDER BY nom DESC");
				$requete->execute();
				$resultat = $requete->fetchall();
				
				echo '<pre>';
				print_r($resultat);
				echo '</pre>';
				
			}
			
			catch(PDOException $e){
				echo 'Echec de la connexion : '. $e->getMessage();
			}
		?>
	</body>
</html>