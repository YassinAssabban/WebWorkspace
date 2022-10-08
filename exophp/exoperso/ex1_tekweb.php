<?php 

echo "<h1>Exercice 1 : </h1>";

$nb1 = 10.5;
$nb2 = 6;
$nb3 = 15.25;

$moy = ($nb1 + $nb2 + $nb3) / 3;

echo "Nombre 1 = $nb1 <br>";
echo "Nombre 2 = $nb2 <br>";
echo "Nombre 3 = $nb3 <br>";
echo "Nombre 3 =" . number_format($moy, 2, ".") . "<br>";

?>