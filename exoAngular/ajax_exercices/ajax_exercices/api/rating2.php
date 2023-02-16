<?php

require_once 'manager/DBManager.php';
require_once 'manager/RatingManager.php';

$dbManager = new DBManager();
$pdo = $dbManager->connect();
$ratingManager = new RatingManager($pdo);

if((isset($_GET['value']) || isset($_POST['value']))
    && (isset($_GET['format']) || isset($_POST['format']))){
      $rate = isset($_GET['value']) ? $_GET['value'] : $_POST['value'];
      $format = isset($_GET['format']) ? $_GET['format'] : $_POST['format'];
      if($rate < 1 || $rate > 10){
        http_response_code(400);
        die('Valeur incorrect. La valeur du vote doit être comprise entre 1 et 10');
      }
      
      if(strtoupper($format) != 'JSON' && strtoupper($format) != 'XML'){
        http_response_code(400);
        die('Format incorrect. Les formats acceptés sont: JSON,XML');
      }
      $ratingManager->save($rate);
      sleep(2);
}else if(!isset($_GET['value']) && !isset($_POST['value'])
          && (isset($_GET['format']) || isset($_POST['format']))){
  http_response_code(400);
  die('Le paramètre "value" est manquant');
}else if(!isset($_GET['format']) && !isset($_POST['format'])
          && (isset($_GET['value']) || isset($_POST['value']))){
  http_response_code(400);
  die('Le paramètre "format" est manquant');
}else{
  $format="XML";
}

$avgAndCount = $ratingManager->ratingAvgAndCount();
if(strtoupper($format) == 'JSON'){
  header('Content-Type: application/json');
  echo json_encode($avgAndCount, JSON_NUMERIC_CHECK);
}else{
  header('Content-Type: application/xml');
  echo  "<resultat>".
          "<moyenne>".
          $avgAndCount['moyenne'].
          "</moyenne>".
          "<nombre>".
          $avgAndCount['nombre'].
          "</nombre>".
        "</resultat>";
}