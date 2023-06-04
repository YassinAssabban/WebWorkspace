<?php

class AppointmentManager
{

    /**
     * @var PDO
     */
    private $connection;

    function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param $id
     * @return Appointment[]
     */
    function getAppointments()
    {
        $query = "SELECT * FROM appointment order by startDate";
        $prep = null;
        $appointments = array();
        try {
            $prep = $this->connection->prepare($query);
            $prep->execute();
            $arr = $prep->fetchAll(PDO::FETCH_ASSOC);
            foreach ($arr as $contDb) {
                $appointment = new Appointment();
                $appointment->setId($contDb['id']);
                $appointment->setNom($contDb['nom']);
                $appointment->setPrenom($contDb['prenom']);
                $appointment->setStartDate($contDb['startDate']);
                $appointment->setEndDate($contDb['endDate']);
                array_push($appointments, $appointment);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        } finally {
            $prep->closeCursor();
            $prep = null;
        }

        return $appointments;
    }

    function save($appointment)
    {
        $prep = null;
        try {
            $sql = "INSERT INTO `appointment` (`nom`,`prenom`,`startDate`,`endDate`) VALUES (:nom,:prenom,:startDate,:endDate)";
            $prep = $this->connection->prepare($sql);
            $prep->bindValue(':nom', $appointment->getNom(), PDO::PARAM_STR);
            $prep->bindValue(':prenom', $appointment->getPrenom(), PDO::PARAM_STR);
            $prep->bindValue(':startDate', $appointment->getStartDate(), PDO::PARAM_STR);
            $prep->bindValue(':endDate', $appointment->getEndDate(), PDO::PARAM_STR);
            $prep->execute();
        } catch (PDOException $e) {
            die($e);
        } finally {
            $prep->closeCursor();
            $prep = null;
        }
    }
}
