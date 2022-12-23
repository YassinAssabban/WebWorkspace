<?php

class Personnage {

    private $personID;
    private $pseudo;
    private $pointsVie;

    public function __construct($pseudo, $pointsVie) {
        $this -> pseudo = $pseudo;
        $this -> pointsVie = $pointsVie;
    }


    public function insert(Personnage $person){

            $db = new DBManager();
            $cnx = $db->getConnection();
            $requete = $cnx->prepare("INSERT INTO Personnage(pseudo,pointsVie)
                        VALUES(:pseudo,:pointsVie)");

                $requete->bindParam(':pseudo', $person->pseudo);
                $requete->bindParam(':pointsVie', $person->pointsVie);
                $requete->execute();
    }

    public function selectAll(){

                $db = new DBManager();
                $cnx = $db->getConnection();
                $requete = $cnx->prepare("SELECT * FROM Personnage");
                $requete->execute();
                $resultat = $requete->fetchall();

        return $resultat;
    }

    public function delete($personID){

        $db = new DBManager();
        $cnx = $db->getConnection();
            $requete = $cnx->prepare("DELETE FROM Personnage WHERE person_id = :personID");
                $requete->bindParam(':personID', $personID);
                $requete->execute();
    }

    public function update($personID, $newPtsVie) {

        $db = new DBManager();
        $cnx = $db->getConnection();
            $requete = $cnx->prepare("UPDATE Personne SET pointsVie=$newPtsVie  WHERE person_id=$personID");
            $requete->execute();
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
} */









?>