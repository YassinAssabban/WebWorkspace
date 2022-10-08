<!DOCTYPE html>
<html>
    <head>
        <title>Ex5-1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="exstyle.css">
    </head>

    <body>
        <form method="POST">
        <center>
        <fieldset>
            <legend>La suite de Fibonacci</legend>
        <table>
            <tr>
                <td>Quel est le nombre d'éléments à afficher?</td>
                <td style="width:40px;"><input type="number" min="1" max="40" name="nbre" id="nbr" style="width:82%;"></td>
            </tr>
            <tr>
                <td colspan=2><center><input type="submit" value="Afficher"></center></td>
            </tr>
        </table>
        </fieldset>
        </center>
        </form>
        <center><p>Voici la liste :</p></center>
        <center>
        <?php
        $nbr = $_POST["nbre"];

            echo lister($nbr);

            function lister($nbr) {

                for ($ct = 0; $ct < $nbr; $ct++){
                    echo calculer($ct),' ';
                }
            }
            function calculer($nbr) {
                 if ($nbr == 0)
                 return 0;
             else if ($nbr == 1)
                 return 1;
             else
                 return (calculer($nbr-1) +
                         calculer($nbr-2));
         }

        ?>
        </center>
    </body>
</html>