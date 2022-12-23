<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classes et objets</title>
	</head>
	<body>
		<?php
		
			// Instructions debugging toutes erreurs
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			
			// On inclut notre classe une fois
			include_once('house.class_02.php');

			// On instancie la classe
			//$myHouse = new House();
			//$friendHouse = new House();
			$myHouse = new House("My house");
			$friendHouse = new House("My friend's house");

			// Changer les propriétés (rendu impossible par private)
			//$myHouse -> primaryColor = 'red';
			//$friendHouse -> primaryColor = 'yellow';
			
			// Changer les propriétés en invoquant une méthode
			$myHouse -> changeColor('white');
			$friendHouse -> changeColor('yellow');
			
			// utilisation des méthodes magiques
			$myHouse -> extra = "Quelque chose en plus";
			echo $myHouse -> extra;
			echo '<br>';
									
			$myHouse -> echoData();
			echo '<br>';
			$friendHouse -> echoData();
			echo '<br>';
		?>
	</body>
</html>