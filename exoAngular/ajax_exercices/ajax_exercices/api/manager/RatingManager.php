<?php

class RatingManager
{

  private $connexion;

  function __construct($db)
  {
    $this->connexion = $db;
  }

  function save($rate)
  {
    $prep = null;
    try {
      $sql = "INSERT INTO `rating` (`rate`) VALUES (:rate)";
      $prep = $this->connexion->prepare($sql);
      $prep->bindValue(':rate', $rate, PDO::PARAM_INT);
      $prep->execute();
    } catch (PDOException $e) {
      die($e);
    } finally {
      $prep->closeCursor();
      $prep = null;
    }
  }

  function ratingAvgAndCount()
  {
    $prep = null;
    $result = null;
    try {
      $sql = "SELECT avg(rate) as moyenne,count(rate) as nombre FROM `rating`";
      $prep = $this->connexion->prepare($sql);
      $prep->execute();
      $result = $prep->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die($e);
    } finally {
      $prep->closeCursor();
      $prep = null;
    }

    return $result;
  }
}
