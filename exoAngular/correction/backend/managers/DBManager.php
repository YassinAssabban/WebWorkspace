<?php
class DBManager
{
    private $serveur;
    private $login;
    public $mdp;

    public function getConnection()
    {
        $this->serveur = "localhost";
        $this->login = "root";
        $this->mdp = "";
        $connexion = new PDO("mysql:host=" . $this->serveur . ";dbname=rating",  $this->login, $this->mdp);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
}

?>