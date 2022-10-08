<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css"  href="exstyle.css">
    </head>
    <body>
        <table>

            <?php
            $tab = array ("Yassin@apple.com","Thomas@apple.com","Thibaut@apple.com","Ugur@windows.com", "Harun@windows.com","Huseyin@linux.com");

            foreach ($tab as $value) {

                $newTab = explode("@", $value);
                $finalTab[] = $newTab[1];
                echo "
                <tr>
                <td>$newTab[1]</td>
                </tr>";
            }
            $countTab = array_count_values($finalTab);



            foreach($countTab as $value) {
                $moyFai = $countTab / count($finalTab) * 100;
                echo $moyFai;
            }

            ?>
        </table>
    </body>
</html>