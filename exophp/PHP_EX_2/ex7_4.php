<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - 4 </title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
    <center>
        <fieldset>
            <legend style="text-align:center;">Base de donnée de jeux vidéos</legend>
            <form method="post" action="ex7_4_liste.php">
                <table>
                    <tr>
                        <td><label>Possesseur</label></td>
                        <td><input type="text" name="posses" size="40"></td>
                    </tr>
                    <tr>
                        <td><label>Console</label></td>
                        <td><input type="text" name="console" size="40"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Effacer"></td>
                        <td><input type="submit" name="Rechercher"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>


                