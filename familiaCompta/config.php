<?php
$user = 'root';
$pass = '';

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=familia;charset=utf8', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());  // meme que exit (sert a cloture le script et sortir du terminal)
}

?>

