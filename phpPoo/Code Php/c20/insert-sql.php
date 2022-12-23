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
			
			$nom = "Alary";
			$prenom = "Philippe";
			$email = "philippe.alary@helha.be";
			
			try{
				$connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				// Insertion de constantes directement dans la bdd
				/*
				$insertion = "INSERT INTO Visiteurs(nom,prenom,email) 
							VALUES('Alary','Philippe','philippe.alary@helha.be'),
							('Durand','Victor','victor.durant@gmail.com'),
							('Joly','Pauline','pauline.joly@gmail.com')";
				*/
				
				// Insertion directe avec variables dans la base de données
				// Possible injection de code SQL !!!
				/*
				$insertion = "INSERT INTO Visiteurs(nom,prenom,email) 
				VALUES('$nom','$prenom','$email')";
				
				$connexion->exec($insertion);
				echo "Valeurs bien insérées";
				*/
				
				// Insertion avec requête préparée
				// Plus rapide et plus sécurisée
				$requete = $connexion->prepare("INSERT INTO Visiteurs(nom,prenom,email)
						VALUES(:nom,:prenom,:email)"
				);
								
				$requete->bindParam(':nom', $nom);
				$requete->bindParam(':prenom', $prenom);
				$requete->bindParam(':email', $email);
				
				$nom = "Astier";
				$prenom = "Alexandre";
				$email = "alex.astier@gmail.com";
				
				$requete->execute();
				echo "Données insérées dans la bdd";	
			}
			
			catch(PDOException $e){
				echo 'Echec de la connexion : '. $e->getMessage();
			}
		?>
	</body>
</html>