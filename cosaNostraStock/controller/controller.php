<?php
require "model/modelDB.php";
require "model/modelPerson.php";

function Accueil()
{
    try {
        $result = Personnage::selectAll();
        require "view/viewHome.php";
    } catch (PDOException $e) {
        $msgError = 'Echec de la connexion : ' .  $e->getMessage();
        require "view/viewError.php";
    }
}

function addPersonnage()
{
    require "view/viewCreate.php";
    if (!empty($_POST["add_record"])) {
        try {
           $personnage = new Personnage($_POST["pseudo"]);
           $personnage->insert($personnage);
           header("Location:index.php");
        } catch (PDOException $e) {
            $msgError = 'Echec de la connexion : ' .  $e->getMessage();
            require "view/viewError.php";
        }
    }
}

function updateVie()
{
    $result = Personnage::SelectAll();
    require "view/viewHome.php";
        try {

            $persoData = Personnage::selectRowTable($_GET['id']);
            if ($persoData['pointsVie'] > 0) {
                Personnage::update($_GET['id'], (int)$persoData['pointsVie']-10);
                header("Location:index.php");
            }
        } catch (PDOException $e) {
            $msgError = 'Echec de la connexion : ' .  $e->getMessage();
            require "view/viewError.php";
        }

}

function deletePersonnage()
{
    try {
        $personnage = new Personnage($_POST["pseudo"]);
        $personnage->delete($_GET['iddel']);
        header("Location:index.php");
    } catch (PDOException $e) {
        $msgError = 'Echec de la connexion : ' .  $e->getMessage();
        require "view/viewError.php";
    }
}


?>