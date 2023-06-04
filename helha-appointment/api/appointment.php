<?php
require_once 'model/Appointment.php';
require_once 'manager/DBManager.php';
require_once 'manager/AppointmentManager.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");

$dbManager = new DBManager();
$connection = $dbManager->connect();
$appointmentManager = new AppointmentManager($connection);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $plat = $appointmentManager->getAppointments();
    echo json_encode($plat);
}else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $appointmentJSON = json_decode(file_get_contents('php://input'), true);
  if(isset($appointmentJSON['nom']) && isset($appointmentJSON['prenom']) && isset($appointmentJSON['startDate']) && isset($appointmentJSON['endDate'])
    && $appointmentJSON['nom'] && $appointmentJSON['prenom']
    && DateTime::createFromFormat('Y-m-d H:i:s', $appointmentJSON['startDate']) !== false
    && DateTime::createFromFormat('Y-m-d H:i:s', $appointmentJSON['endDate']) !== false){
    $appointment = new Appointment();
    $appointment->setNom($appointmentJSON['nom']);
    $appointment->setPrenom($appointmentJSON['prenom']);
    $appointment->setStartDate($appointmentJSON['startDate']);
    $appointment->setEndDate($appointmentJSON['endDate']);
    $appointmentManager->save($appointment);
  }else{
    http_response_code(400);
  }

}
