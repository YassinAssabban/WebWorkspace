<?php

class Appointment implements JsonSerializable
{

    private $id;
    private $nom;
    private $prenom;
    private $startDate;
    private $endDate;

    /**
     * Plat constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    // Fonction utilisé lorsque l'on appel un json_encode sur l'objet Plat
    public function jsonSerialize()
    {
        return
            [
                'id' => $this->getId(),
                'nom' => $this->getNom(),
                'prenom' => $this->getPrenom(),
                'startDate' => utf8_encode($this->getStartDate()),
                'endDate' => $this->getEndDate(),
            ];
    }
}
