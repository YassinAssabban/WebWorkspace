<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - 2 Solde</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<?php
    $soldeAcc = $_SESSION["soldeAcc"];
    $montantVir = $_POST["montantVir"];
    $newSolde = $soldeAcc - $montantVir;

?>
<body>
    <center>
        <form action="ex5_2.php">
            <legend>Nouvelle Situation</legend>
            <label>Nouveau Solde</label>
            <?php echo $newSolde . " €";?><br><br>
            <a href="ex5_2.php"><input type="button" value="Retour à l'accueil"></a>
        </form>
    </center>
</body>
</html>