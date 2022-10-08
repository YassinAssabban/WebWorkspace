<?php

    function connexionDB()
    {
        if ($connexion = new PDO ("mysql:host=localhost;dbname=jeuxvideos", "root", "")) {
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connexion;
        }
    }

        $posses = $_POST["posses"];

        $cnx = connexionDB();
        $requete = $cnx->prepare("SELECT * FROM jeux WHERE pseudo_poss='$posses'");
        $requete->execute();
        $tbResult = $requete->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - 4 Liste de titres</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
    <center>
        <table>
            <caption>Liste des titres</caption>
            <?php

                echo "<tr><th>Titre</th>";
                echo "<th>Propriétaire</th>";
                echo "<th>Console</th>";
                echo "<th>Prix</th></tr>";

            foreach($tbResult as $record) {

                echo "<tr><td>";
                echo $record['titre'];
                echo "</td>";

                echo "<td>";
                echo $record['pseudo_poss'];
                echo "</td>";

                echo "<td>";
                echo $record['console'];
                echo "</td>";

                echo "<td>";
                echo $record['prix'];
                echo "</td></tr>";

            }

            ?>
        </table>
    </center>
</body>
</html>