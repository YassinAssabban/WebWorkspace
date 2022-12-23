<?php
class Personne
{
    public $person_id;
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    function insert(Personne $personne)
    {
        $db = new DBManager();
        $cnx = $db->connexionDB($db);
        $requete =  $cnx->prepare("INSERT INTO Personne(nom,prenom,age) VALUES (:nom,:prenom,:age)");
        $requete->bindParam(':nom', $personne->nom);
        $requete->bindParam(':prenom', $personne->prenom);
        $requete->bindParam(':age', $personne->age);
        $requete->execute();
        $id = $cnx->lastInsertId();
        $personne->person_id = $id;
    }

    function update(Personne $personne)
    {
        $db = new DBManager();
        $cnx = $db->connexionDB($db);
        $requete = $cnx->prepare("UPDATE Personne SET nom='$personne->nom', prenom='$personne->prenom', age='$personne->age' WHERE person_id='$personne->person_id'");
        $requete->execute();
    }
    
    function delete(int $id)
    {
        $db = new DBManager();
        $cnx = $db->connexionDB($db);
        $requete =  $cnx->prepare("DELETE FROM Personne WHERE person_id=$id")->execute();
    }

    static function getAll()
    {
        $db = new DBManager();
        $cnx = $db->connexionDB($db);
        $requete =  $cnx->prepare("SELECT * FROM Personne");
        $requete->execute();
        $resultat = $requete->fetchAll();
        return $resultat;
    }
}
