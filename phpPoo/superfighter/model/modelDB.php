<?php

class DBManager
{
    public $serveur;
    public $login;
    public $mdp;

    public function getConnection()
    {
        $this->serveur = "localhost";
        $this->login = "root";
        $this->mdp = "";
        $connexion = new PDO("mysql:host=" . $this->serveur . ";dbname=superfighter",  $this->login, $this->mdp);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
}

try{
    $db = new DBManager();
    $cnx = $db->getConnection();
    $cnx->exec("CREATE DATABASE superfighter");
} catch(PDOException $e){
    $e->getMessage();
}

try {
    $db = new DBManager();
    $cnx = $db->getConnection();
    $codesql = "CREATE TABLE Personnage (
        person_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        pseudo VARCHAR(50) NOT NULL,
        pointsVie INT NOT NULL
        )";

    $cnx->exec($codesql);
} catch(PDOException $e){
    $e->getMessage();
}


?>