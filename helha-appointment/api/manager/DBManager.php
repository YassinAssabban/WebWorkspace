<?php

class DBManager
{

  private $conn;

  function connect()
  {
    $this->conn = null;
    try {
      $strConnection = 'mysql:host=localhost;dbname=helha-appointment';
      $this->conn = new PDO($strConnection, 'root', '');
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne : ' . $e->getLine() . ' : ' . $e->getMessage();
      die($msg);
    }
    return $this->conn;
  }

  function disconnect()
  {
    $this->conn = null;
  }
}
