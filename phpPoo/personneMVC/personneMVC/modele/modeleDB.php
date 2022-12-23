<?php

class DBManager
{
    public $serveur;
    public $login;
    public $mdp;

    public function connexionDB()
    {
        $this->serveur = "localhost";
        $this->login = "root";
        $this->mdp = "";
        $connexion = new PDO("mysql:host=" . $this->serveur . ";dbname=testpdo",  $this->login, $this->mdp);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
}
