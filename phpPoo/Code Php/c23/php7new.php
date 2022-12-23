<?php
	// En début de chaque fichier (doit être la première ligne)
	// à décommenter pour avoir le mode strict
	//declare(strict_types=1);
	
	// Instructions debugging toutes erreurs
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	// Mode coercif et mode strict
	function fct_php7(int $param) {
		return $param;
	}
	echo fct_php7(1);
	echo fct_php7('1');
	echo fct_php7(1.2);
	//echo fct_php7('a'); // va générer une erreur
	
	// Fonction avec valeur de retour
	function fct_php7_with_returnValue(array $arg) : int {
		return count($arg);
	}
	//echo fct_php7_with_returnValue([1,2,3,4]);
	
	// Opérateur Tie fighter
	echo 2<=>2; //0
	echo 2<=>3; //-1
	echo 2<=>1; //1
	
	echo 'b'<=>'b'; //0
	echo 'b'<=>'c'; //-1
	echo 'b'<=>'a'; //1
	
	// Opérateur null coalescing
	// En php 5
	$param1 = isset($_GET['param1']) ? $_GET['param1'] : null;
	// En php 7
	$param1 = $_GET['param1'] ?? null;
	
	// très utile
	$param1 = $_GET['param1'] ?? $_POST['param1'] ?? null;
?>