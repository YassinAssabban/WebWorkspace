<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mic;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());  // meme que exit (sert a cloture le script et sortir du terminal)
}

?>