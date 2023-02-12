<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());  // meme que exit (sert a cloture le script et sortir du terminal)
}




$prenom = "Yassin";
$nom = "Assabban";
$age = 23;
$matricule = "LA200036";

$arr = array('nom' => $prenom, 'prenom' => $nom, 'age' => $age, 'matricule' => $matricule);

$infoUserJSON = json_encode($arr);


$remplire = $bdd->prepare('INSERT INTO user(data)VALUES(?)');
$remplire->execute(array($infoUserJSON));

$lire = $bdd->prepare('SELECT * FROM user WHERE id = ?');
$lire->execute(array(24));
$data = $lire->fetch();

$json = json_decode($data["data"]);
//print_r($data);
print_r($json->{'nom'});


?>