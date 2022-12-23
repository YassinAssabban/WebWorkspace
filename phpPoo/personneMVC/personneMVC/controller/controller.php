<?php
require "modele/modeleDB.php";
require "modele/modelePersonne.php";

function accueil()
{
    try {
        $result = Personne::getAll();
        require "vue/vueAccueil.php";
    } catch (PDOException $e) {
        $msgError = 'Echec de la connexion : ' .  $e->getMessage();
        require "vue/vueError.php";
    }
}

function addPersonne()
{
    require "vue/vueCreate.php";
    if (!empty($_POST["add_record"])) {
        try {
            $personne = new Personne($_POST['nom'], $_POST['prenom'], $_POST['age']);
            $personne->insert($personne);
            header("location:index.php");
        } catch (PDOException $e) {
            $msgError = 'Echec de la connexion : ' .  $e->getMessage();
            require "vue/vueError.php";
        }
    }
}

function modifPersonne()
{
    $result = Personne::getAll();
    require "vue/vueEdit.php";
    if (!empty($_POST["save_record"])) {
        try {
            $personne = new Personne($_POST['nom'], $_POST['prenom'], $_POST['age']);
            $personne->person_id =  $_GET['idedit'];
            $personne->update($personne);
            header("location:index.php");
        } catch (PDOException $e) {
            $msgError = 'Echec de la connexion : ' .  $e->getMessage();
            require "vue/vueError.php";
        }
    }
}

function deletePersonne()
{
    try {
        $personne = new Personne($_POST['nom'], $_POST['prenom'], $_POST['age']);
        $personne->delete($_GET['iddel']);
        header("location:index.php");
    } catch (PDOException $e) {
        $msgError = 'Echec de la connexion : ' .  $e->getMessage();
        require "vue/vueError.php";
    }
}
