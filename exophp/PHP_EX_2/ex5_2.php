<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - 2 </title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
    <center>
        <legend style="text-align:center;">Introduisez vos informations</legend>
            <form method="POST" action="ex5_2_vir.php">
                <label>Nom :</label>
                <input type="text" name="nom" size="30"><br>
                <label>Sexe :</label>
                <select name="sexe" >
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select><br><br>
                <label>Etat-civil :</label><br>

                <input type="radio" name="etciv" value="maried">
                <label>Marié </label>

                <input type="radio" name="etciv" value="divorced">
                <label>Divorcé :</label>

                <input type="radio" name="etciv" value="single">
                <label>Célibataire </label>

                <input type="radio" name="etciv" value="veuf">
                <label>Veuf </label><br><br><br>

                <label>No° de Compte</label>
                <input type="text" name="iban" size="15"><br>

                <label>Solde du compte</label>
                <input type="text" name="soldeAcc" size="15"><br><br><br>

                <input type="submit" value="Envoyez" size="15">

            </form>
    </center>
</body>
</html>
