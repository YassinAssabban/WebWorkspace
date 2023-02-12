<?php

if(isset($_GET['name'])){
  sleep(5);
  echo 'Hello '.$_GET['name'].' !';

  // {
  //    "retour": "Hello $_GET['name']"
  // {
  // $result = array("retour" => 'Hello '.$_GET['name'].' !');

  // echo json_encode($result);
}
?>