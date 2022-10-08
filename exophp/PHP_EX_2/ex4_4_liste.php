<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - 4 Liste des livres</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
    <center>
        <table> 
                <caption>Liste des Livres</caption>
                <?php

                    $keyword = $_POST["keyword"];

                    $tabLivre = array("Cours :Java pour débutants", "PHP pour débutants", "HTML & CSS pour débutants", "Javascript pour débutants");

                    #var_dump($tabLivre);
                    $flagNoEntry = false;

                    foreach ($tabLivre as $indice => $value) {
                        if (stristr($value, $keyword)) {
                            echo "<tr><td>";
                            echo $value;
                            echo "</tr></td>";
                            $flagNoEntry = true;
                        }
                    }

                    if ($flagNoEntry == false) {
                        echo "<tr><td>";
                        echo "Aucunes entrées trouvées";
                        echo "</tr></td>";
                    }
                ?>
        </table>
    </center>
</body>
</html>