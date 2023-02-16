<?php


class RatingManager{
    private $db;

    public function __constructor($db){
        $this->db = $db;
    }

    public function countAndAvg(){

        $sql = 'SELECT avg(rate) as moyenne , count(rate) as total FROM rating';
        try {
            $selectData = $this->db->prepare($sql);
            $selectData->execute();
            $data = $selectData->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            die($e->getMessage());
        }  finally {
            $selectData->closeCursor();
        }
    }

    public function save(Rating $rating){
        $sql = "INSERT INTO rating(rate) VALUES(:rate)";

        try {
            $insert = $this->db->prepare($sql);
            $insert->execute(array('rate' => $rating->getRate()));
        } catch (PDOException $e){
            die($e->getMessage());
        }  finally {
            $insert->closeCursor();
        }
    }

}

?>