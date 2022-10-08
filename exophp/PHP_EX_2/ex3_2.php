<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exstyle.css">
    <title>Exercice 3 - 2</title>
</head>
<body>
    <table>
        <?php


            $tableau = array("Thomas@hotmail.com", "Benjamin@yahoo.fr", "Philipe@hotmail.com", "Olivier@gmail.com", "Alison@hotmail.com", "Thibaut@gmail.com");
            $separator = "@";
            $nbrefai1 = 0;

            for ($i=0; $i < count($tableau); $i++) { 
                $fai[$i] = explode($separator, $tableau[$i]);
                //print_r($fai);
                $faiFinal[$i] = $fai[$i][1];
            }
            //print_r($faiFinal);
            $resultFai = array_count_values($faiFinal);
            //print_r($resultFai);

            $combienFaiTotal = count($tableau);
            //print($combienFaiTotal);

            foreach ($resultFai as $indice => $value) {
                $total = $value / $combienFaiTotal * 100;
                $finalPercent = $total * 8;
                $total = number_format($total, 2, ',', '.');

                echo "<tr>";
                echo "<td>$indice</td>";
                echo "<td>$total %</td>";
                echo "<td> <img src=\"img/pixel_bleu.gif\" width=\"$finalPercent\" height=\"20\">  </td>";
                echo "</tr>";
            }
        ?>


    </table>
</body>
</html>