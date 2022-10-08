<?php 

echo "<h1>Exercice 4 : </h1>";

$moy = 13;

if ($moy >= 16) {
    $mention = "Mention très bien";
} else if ($moy >= 14) {
    $mention = "Mention bien";
} else if ($moy >= 12) {
    $mention = "Mention assez bien";
} else $mention = "Pas de mention";

echo "Moyenne = $moy $mention";

?>