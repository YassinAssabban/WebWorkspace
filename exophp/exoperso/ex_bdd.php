<?php

try {
    $dsn = 'mysql:host=localhost;dbname=quiz';
    $user = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $con = new PDO($dsn, $user, $password, $options);
    echo "la connexion à été établie";
} catch (Exception $e) {
    die("erreure de connexion");
}


?>