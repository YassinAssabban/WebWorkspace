<?php

class Personne
{

    private $personID;
    private $lastname;
    private $firstname;
    private $age;

    public function __construct($lastname, $firstname, $age)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
    }

    public function connectBdd()
    {
        $serveur = "localhost";
        $login = "root";
        $password = "";

        $connexion = new PDO("mysql:host=$serveur;dbname=testpdo", $login, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    public function InsertionTable($connexion)
    {

        $requete = $connexion->prepare("INSERT INTO Personne(lastname,firstname,age)
                    VALUES(:lastname,:firstname,:age)");

        $requete->bindParam(':lastname', $this->lastname);
        $requete->bindParam(':firstname', $this->firstname);
        $requete->bindParam(':age', $this->age);
        $requete->execute();
    }

    public function SelectAllFromTable($connexion)
    {

        $requete = $connexion->prepare("Select * FROM Personne");
        $requete->execute();
        $resultat = $requete->fetchall();
    }

    public function DeleteRowFromTable($connexion, $personID)
    {

        $requete = $connexion->prepare("DELETE FROM Personne WHERE person_id = :personID");
        $requete->bindParam(':personID', $personID);
        $requete->execute();
    }

    public function UpdateRow($connexion, $personID, $newAge)
    {

        $requete = $connexion->prepare("UPDATE Personne SET age=:newAge  WHERE person_id = :personID");
        $requete->bindParam(':newAge', $newAge);
        $requete->bindParam(':personID', $personID);
        $requete->execute();
    }


}