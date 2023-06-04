<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json');

require_once('../config/DBManager.php');
require_once('../config/userManager.php');

$dbManager = new DbManager();
$pdo = $dbManager->connect();
$userManager = new UserManager($pdo);

if (isset($_POST['email']) && isset($_POST['password'])) {
  $auth = $userManager->addUser($_POST['email'], $_POST['password'], $_POST['section'], $_POST['firstname'], $_POST['lastname'], $_POST['matricule']);
  if ($auth) {
    http_response_code(200);
  } else {
    http_response_code(403);
  }
} else {
  http_response_code(400);
}
