<!DOCTYPE html>
<html>
    <head>
        <title>Ex5-2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="exstyle.css">
    </head>

    <body>
        <form method="POST" action="ex5_2_gestion.php">
        <center>
            <legend>Introduisez vos informations</legend><br>
            <label> Nom :</label>
            <input type="name" name="name" size=13>
            <br><br>
            <label> Sexe :</label>
            <select name="sexe">
                <option value="female">Femme</option>
                <option value="male">Homme</option>
            </select>

            <br><br>

            <label> Etat-civil : </label><br>
            <label>Marié :</label>
            <input type="radio" name="status" id="married">

            <label>Divorcé :</label>
            <input type="radio" name="status" id="divorce">

            <label>Célibataire :</label>
            <input type="radio" name="status" id="single">

            <label>Veuf :</label>
            <input type="radio" name="status" id="widower">

            <br><br>

            <label>No° Compte :</label>
            <input type="name" style="width:100px;">

            <br><br>

            <label>Solde Compte :</label>
            <input type="number" style="width:100px;">

            <br><br>

            <input type="submit" value="Envoyer">

        </center>
        </form>
        <center>
        <?php

        function controle() {

        }

        ?>
        </center>
    </body>
</html>