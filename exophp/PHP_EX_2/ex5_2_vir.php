<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - 2 Virement</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<?php

$nom = $_POST["nom"];
$sexe = $_POST["sexe"];
$etciv = $_POST["etciv"];
$iban = $_POST["iban"];
$soldeAcc = $_POST["soldeAcc"];
$_SESSION["soldeAcc"] = $soldeAcc;


function Controle($iban, $soldeAcc)
{
    require 'checkIBAN.php';

    if (checkIBAN($iban) == true) {
        echo "Votre solde est de " . $soldeAcc . " €<br>";
        echo "<label>Montant du virement </label>";
        echo "<input type=\"text\" name=\"montantVir\" size=\"15\">" . " €   ";
        echo "<input type=\"submit\" value=\"Entrer\" size=\"15\">";
    } else {
        echo "<p style=\"color:red;\">Numéro de compte INCORRECTE</p><br>";
        echo "<a href=\"ex5_2.php\"><input type=\"button\" value=\"Retour\"></a>";
    }
}

function Identite($sexe, $nom, $etciv)
{

    if ($sexe == "Homme") {
        echo "<label>Bienvenue Monsieur </label>" . $nom . "<br>";
    } else if ($sexe == "Femme") {
            if ($etciv == "maried" || $etciv == "veuf" || $etciv == "divorced") {
                echo "<label>Bienvenue Madame </label>" . $nom . "<br>";
            } else echo "<label>Bienvenue Mademoiselle </label>" . $nom . "<br>";
    }
}


?>
<body>
    <center>
        <fieldset>
            <form method="POST" action="ex5_2_solde.php">
                <?php Identite($sexe, $nom, $etciv); ?><br>
                <?php Controle($iban, $soldeAcc); ?>
            </form>
        </fieldset>
    </center>
</body>
</html>