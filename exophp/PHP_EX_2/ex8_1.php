<?php
session_set_cookie_params(600);
session_start();

function connexionDB()
{
    if ($connexion = new PDO("mysql:host=localhost;dbname=jeuxvideos", "root", "")) {
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
}

$cnx = connexionDB();
$requete = $cnx->prepare("SELECT count(*) FROM quiz ");
$requete->execute();
$tbResultCount = $requete->fetchAll();

$totQuest = $tbResultCount[0];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="exstyle.css">
    <title>Exercice Quiz</title>
</head>
    <body>

    </body>
</html>