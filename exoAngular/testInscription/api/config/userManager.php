<?php

class UserManager
{
  private $db;

  function __construct($db)
  {
    $this->db = $db;
  }

  public function getUser($user, $password)
  {
    $sql = "SELECT email,password from users where email=:email";
    $result = false;
    try {
      $select = $this->db->prepare($sql);
      $params = array(
        'email' => $user
      );
      $select->execute($params);
      $loginInfo = $select->fetch(PDO::FETCH_ASSOC);
      if ($loginInfo) {
        $result = password_verify($password, $loginInfo['password']);
      }
    } catch (PDOException $e) {
      die($e);
    } finally {
      $select->closeCursor();
    }
    return $result;
  }

  public function addUser($email, $password, $section, $firstname, $lastname, $matricule)
  {
    $sql = "INSERT INTO users (email,password, section, firstname, lastname, matricule) VALUES (:email,:password,:section,:firstname,:lastname,:matricule)";
    $result = false;
    try {
      $insert = $this->db->prepare($sql);
      $params = array(
        'email' => $email,
        'section' => $section,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'matricule' => $matricule,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      );
      $result = $insert->execute($params);
    } catch (PDOException $e) {
      die($e);
    } finally {
      $insert->closeCursor();
    }
    return $result;
  }

  public function deleteUser($user)
  {
    $sql = "DELETE FROM users WHERE email=:email";
    $result = false;
    try {
      $delete = $this->db->prepare($sql);
      $params = array(
        'email' => $user
      );
      $result = $delete->execute($params);
    } catch (PDOException $e) {
      die($e);
    } finally {
      $delete->closeCursor();
    }
    return $result;
  }

  public function updateUser($user, $password)
  {
    $sql = "UPDATE users SET password=:password WHERE email=:email";
    $result = false;
    try {
      $update = $this->db->prepare($sql);
      $params = array(
        'email' => $user,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      );
      $result = $update->execute($params);
    } catch (PDOException $e) {
      die($e);
    } finally {
      $update->closeCursor();
    }
    return $result;
  }
}
