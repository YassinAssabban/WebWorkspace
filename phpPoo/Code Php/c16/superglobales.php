<?php
	$nom_cookie = "utilisateur";
	$valeur_cookie = "Philippe Alary";

	setcookie($nom_cookie, $valeur_cookie, time()+3600, "localhost", false, true);

	$nom_cookie2 = "test";
	$valeur_cookie2 = "Ceci est un test";

	setcookie($nom_cookie2,$valeur_cookie2);
	setcookie($nom_cookie2,"Cookie modifié",time()+3600);
	
	echo $_COOKIE['test'];
	setcookie($nom_cookie2,"",time()-3600);
?>

<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Superglobales</title>
	</head>
	<body>
		<?php
		
			$_SESSION['prenom'] = "Pierre";
			$_SESSION['age'] = "24";
			$_SESSION['sport'] = "Trail";
			
			$nombre1 = 6;
			
			function Bonjour() {
				echo 'Bonjour à tous !';
				$nombre2 = 7;
			}
			
			Bonjour();
			echo '<br/>' .$nombre1;
			echo '<br/>' .$nombre2;
			
			$x = 10;
			$y = 20;
			
			function Multiplication() {
				$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
			}
			
			Multiplication();
			echo $z;
			
			echo '<br/><br/>';
			echo $_SERVER['PHP_SELF']. '<br/>';
			echo $_SERVER['SERVER_ADDR']. '<br/>';
			echo $_SERVER['SERVER_NAME']. '<br/>';
			echo $_SERVER['SCRIPT_NAME']. '<br/>';
			echo $_SERVER['HTTP_HOST']. '<br/>';
		?>
	</body>
</html>