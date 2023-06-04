<?php
require_once('../config/config.php');

class DBManager
{

  private $db;

  function connect()
  {
    try {
      // $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE_NAME, DB_USERNAME, DB_PASSWORD);
      $this->db = new PDO('mysql:host=localhost;dbname=medrect', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      $msg = 'ERREUR PDO dans ' . $e->getFile() . ' Ligne : ' . $e->getLine() . ' : ' . $e->getMessage();
      die($msg);
    }
    return $this->db;
  }

  function disconnect()
  {
    $this->db = null;
  }
}
