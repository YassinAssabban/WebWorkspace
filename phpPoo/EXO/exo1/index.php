<?php

$serveur = "localhost";
$login = "root";
$password = "";

try{
    $connexion = new PDO("mysql:host=$serveur;dbname=testpdo", $login, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la bdd réussie <br/>";
} catch(PDOException $e){
    echo 'Echec de la connexion : '. $e->getMessage();
}
class Personne {

    private $personID;
    private $lastname;
    private $firstname;
    private $age;

    public function __construct($lastname, $firstname, $age) {
        $this -> lastname = $lastname;
        $this -> firstname = $firstname;
        $this -> age = $age;
    }


    public function InsertionTable($connexion){

        try {
            $requete = $connexion->prepare("INSERT INTO Personne(lastname,firstname,age)
                        VALUES(:lastname,:firstname,:age)");

                $requete->bindParam(':lastname', $this->lastname);
                $requete->bindParam(':firstname', $this->firstname);
                $requete->bindParam(':age', $this->age);
                $requete->execute();
                echo "Données insérées dans la bdd";
            } catch (PDOException $e) {
            echo 'Echec de la connexion : '. $e->getMessage();
        }
    }

    public function SelectAllFromTable($connexion){

        try {
            $requete = $connexion->prepare("Select * FROM Personne");
                $requete->execute();
                $resultat = $requete->fetchall();

                echo "Voici vos données";
                echo '<pre>';
                print_r($resultat);
                echo '</pre>';
            } catch (PDOException $e) {
            echo 'Echec de la connexion : '. $e->getMessage();
        }
    }

    public function DeleteRowFromTable($connexion, $personID){

        try {
            $requete = $connexion->prepare("DELETE FROM Personne WHERE person_id = :personID");
                $requete->bindParam(':personID', $personID);
                $requete->execute();
                echo "Données supprimées dans la bdd";
            } catch (PDOException $e) {
            echo 'Echec de la connexion : '. $e->getMessage();
        }
    }

    public function UpdateRow($connexion, $personID, $newAge) {
        try {
            $requete = $connexion->prepare("UPDATE Personne SET age=:newAge  WHERE person_id = :personID");
                $requete->bindParam(':newAge', $newAge);
                $requete->bindParam(':personID', $personID);
                $requete->execute();
                echo "Données Modifiées dans la bdd";
            } catch (PDOException $e) {
            echo 'Echec de la connexion : '. $e->getMessage();
        }
    }


}

// test for create
/*
try {
    $personne1 = new Personne("Assabban", "Yassin", 23);
    $personne1->InsertionTable($connexion);
    $personne2 = new Personne("Celik", "Esad", 19);
    $personne2->InsertionTable($connexion);
    $personne3 = new Personne("ElJefe", "Bilal", 24);
    $personne3->InsertionTable($connexion);

} catch (PDOException $e) {
    echo 'Echec de la connexion : '. $e->getMessage();
} */

// test for select

/*
try {
    $personne1 = new Personne("Assabban", "Yassin", 23);
    $personne1->SelectAllFromTable($connexion);
} catch (PDOException $e) {
    echo 'Echec de la connexion : '. $e->getMessage();
} */


// test for DeleteRowFromTable
/*
try {
    $personne1 = new Personne("Assabban", "Yassin", 23);
    $personne1->DeleteRowFromTable($connexion, 2);
} catch (PDOException $e) {
    echo 'Echec de la connexion : '. $e->getMessage();
} */

// test for UpdateRow
/*
try {
    $personne1 = new Personne("Assabban", "Yassin", 23);
    $personne1->UpdateRow($connexion, 3, 18);
} catch (PDOException $e) {
    echo 'Echec de la connexion : '. $e->getMessage();
} */²



















/*
try{
    $connexion = new PDO("mysql:host=$serveur", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connexion->exec("CREATE DATABASE testpdo");
    echo "Nouvelle bdd testpdo créee";
} catch(PDOException $e){
    echo 'Echec de la connexion : '. $e->getMessage();
}

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=testpdo", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la bdd réussie <br/>";

    $codesql = "CREATE TABLE Personne (
        person_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        lastname VARCHAR(50) NOT NULL,
        firstname VARCHAR(50) NOT NULL,
        age int NOT NULL
        )";

    $connexion->exec($codesql);
    echo 'Table "Personne" créée';
} catch(PDOException $e){
    echo 'Echec de la connexion : '. $e->getMessage();
}
*/







?>