<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - 1</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
    <center>
        <fieldset>
            <legend style="text-align:center;">La suite de Fibonacci</legend>
                <form method="POST" action="#">
                    <table>
                        <tr>
                            <td>
                                <label>Quel est le nombre d'éléments à afficher?</label>
                            </td>
                            <td>
                                <input type="number" name="nbreAffich" min="1" max="40">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <input type="submit" value="Afficher" >
                            </td>
                        </tr>
                    </table>
                </form>
        </fieldset>
    </center>
</body>
</html>
<?php
$nbreAff = $_POST["nbreAffich"];
liste($nbreAff);

function calculer($nbreAff)
{
    $nb1 = 0;
    $nb2 = 1;
    $nb3 = 0;
    $cpt = 0;

    while ($cpt < $nbreAff) {
        echo " " .$nb1;
        $nb3 = $nb1 + $nb2;
        $nb1 = $nb2; 
        $nb2 = $nb3;
        $cpt++;
    }
}


function liste($nbreAff)
{
    echo "<center>";
    echo "Voici la liste :";
    calculer($nbreAff);
    echo "</center>";
} 
?>