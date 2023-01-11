<?php

class Personnage
{

    private $personID;
    private $pseudo;
    private $pointsVie;

    public function __construct($pseudo)
    {
        $this->pseudo = $pseudo;
        $this->pointsVie = 100;
    }


     function insert(Personnage $personnage)
    {

        $db = new DBManager();
        $cnx = $db->getConnection();
        $requete = $cnx->prepare("INSERT INTO Personnage(pseudo,pointsVie)
                        VALUES(:pseudo,:pointsVie)");

        $requete->bindParam(':pseudo', $personnage->pseudo);
        $requete->bindParam(':pointsVie', $personnage->pointsVie);
        $requete->execute();
        $id = $cnx->lastInsertId();
        $personnage->personID = $id;
    }

    static public function selectAll()
    {

        $db = new DBManager();
        $cnx = $db->getConnection();
        $requete = $cnx->prepare("SELECT * FROM Personnage");
        $requete->execute();
        $resultat = $requete->fetchall();

        return $resultat;
    }

    function delete($personID)
    {

        $db = new DBManager();
        $cnx = $db->getConnection();
        $requete = $cnx->prepare("DELETE FROM Personnage WHERE person_id = :personID");
        $requete->bindParam(':personID', $personID);
        $requete->execute();
    }

    static function selectRowTable($id)
    {
        $db = new DBManager();
        $cnx = $db->getConnection();
        $requete = $cnx->prepare("SELECT * FROM Personnage WHERE  person_id =?");
        $requete->execute([$id]);
        $resultat = $requete->fetch();
        return $resultat;

    }

    static function update(int $id, int $pointsVie)
    {

        $db = new DBManager();
        $cnx = $db->getConnection();
        $requete = $cnx->prepare("UPDATE Personnage SET pointsVie=? WHERE person_id=?");
        $requete->execute([$pointsVie, $id]);
    }
}

