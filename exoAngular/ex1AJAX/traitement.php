<?php
header("Content-Type: application/json");
if (isset($_GET['note'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=fiche1ajax;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());  // meme que exit (sert a cloture le script et sortir du terminal)
    }


//echo $_POST['note'];

$insertNote = $bdd->prepare('INSERT INTO rating(note)VALUES(?)');
$insertNote->execute(array($_GET['note']));


$selectData = $bdd->prepare('SELECT avg(note), count(note) FROM rating');
$selectData->execute();
$data = $selectData->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
}
?>