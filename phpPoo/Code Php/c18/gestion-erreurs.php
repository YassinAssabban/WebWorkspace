<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Gestion des erreurs en PhP</title>
	</head>
	<body>
		<?php
		/*
			if(!file_exists("inconnu.txt")){
				die("Fichier non trouvé")
			} else {
				$fichier = fopen("inconnu.txt", "r");
			}
		*/	
			function Chiffre($chiffre) {
				if($chiffre > 9){
					throw new Exception ("La valeur doit être inférieure à 10");
				}
				return true;
			}
			
			try{
				Chiffre(12);
				echo "Vous avez entrer une valeur correcte";
			}
			
			catch(Exception $e){
				echo 'Message d\'erreur : ' .$e->getMessage();
			}
		?>
	</body>
</html>