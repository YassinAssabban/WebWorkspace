<?php 

echo "<h1>Exercice 3 : </h1>";

$nb1 = 13;

if (is_int($nb1)) {
    if ($nb1 % 2) {
        echo "Nombre : $nb1  est impaire <br>";
    } else {
        echo "Nombre : $nb1  est paire <br>";
    }
} else {
    echo "le nombre : $nb1 n'est pas un entier<br>";
}


?>