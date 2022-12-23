<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classes et objets</title>
	</head>
	<body>
		<?php
			// On inclut notre classe une fois
			include_once('house.class_01.php');

			// On instancie la classe
			//$myHouse = new House();
			//$friendHouse = new House();
			$myHouse = new House("My house", "black");
			$friendHouse = new House("My friend's house", "white");

			// Changer les propriétés
			$myHouse -> primaryColor = 'red';
			$friendHouse -> primaryColor = 'yellow';
			
			// Changer les propriétés en invoquant une méthode
			$myHouse -> changeColor('white');
			
			// Afficher les propriétés
			echo $myHouse -> primaryColor;
			echo '<br>';
			echo $friendHouse -> primaryColor;
			echo '<br>';
			
			$myHouse -> echoData();
			echo '<br>';
			$friendHouse -> echoData();
			echo '<br>';
		?>
	</body>
</html>