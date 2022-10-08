<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - 3</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
<center>
        <fieldset>
        <legend style="text-align:center;">Le devis</legend>
            <table>
                <form method="POST">
                    <tr>
                        <td>
                            <label>Nom - Prénom / Dénomination</label>
                        </td>
                        <td>
                            <input type="text" name="denomination">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Adresse</label>
                        </td>
                        <td>
                            <input type="text" name="adresse">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Code postal - Localité</label>
                        </td>
                        <td>
                            <input type="text" name="cpLoc">
                        </td>
                    </tr>
					<tr>
                        <td>
                            <label>Type d'assujetissement</label>
                        </td>
                        <td>
                            <input type="radio" name="isAssujeti" value="Assujeti">
                            <label>Assujeti</label>
                            <input type="radio" name="isAssujeti" value="Non assujeti">
                            <label>Non assujeti</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Choix du processeur</label>
                        </td>
                        <td>
                            <select name="proco">
                                <option value="Intel Core i3-12100">Intel Core i3-12100</option>
                                <option value="Intel Core i5-11600K">Intel Core i5-11600K</option>
                                <option value="Intel Core i7-12700K">Intel Core i7-12700K</option>
                                <option value="Intel Core i9-12900K">Intel Core i9-12900K</option>
                                <option value="AMD Ryzen 3 1200">AMD Ryzen 3 1200</option>
                                <option value="AMD Ryzen 5 5600X">AMD Ryzen 5 5600X</option>
                                <option value="AMD Ryzen 7 5800X">AMD Ryzen 7 5800X</option>
                                <option value="AMD Ryzen 9 5950X">AMD Ryzen 9 5950X</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Choix de la RAM</label>
                        </td>
                        <td>
                            <select name="ram">
                                <option value="4 Go">4 Go</option>
                                <option value="8 Go">8 Go</option>
                                <option value="16 Go">16 Go</option>
                                <option value="32 Go">32 Go</option>
                                <option value="64 Go">64 Go</option>
                                <option value="128 Go">128 Go</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Choix de l'OS</label>
                        </td>
                        <td>
                            <input type="checkbox" value="Windows 10" name="wichOS">
                            <label>Windows 10</label>
                            <input type="checkbox" value="Windows 11" name="wichOS">
                            <label>Windows 11</label><br>
                            <input type="checkbox" value="ChromeOS" name="wichOS">
                            <label>ChromeOS</label>
                            <input type="checkbox" value="CentOS" name="wichOS">
                            <label>CentOS</label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Options</label>
                        </td>
                        <td>
                            <input type="checkbox" value="Ecran" name="option[]">
                            <label>Ecran 24"</label>
                            <input type="checkbox" value="Clavier" name="option[]">
                            <label>Clavier</label>
                            <input type="checkbox" value="Souris" name="option[]">
                            <label>Souris</label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Remarque</label>
                        </td>
                        <td>
                            <textarea name="remarque" rows="4" cols="30">

                            </textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="reset" value="Effacer">
                        </td>
                        <td>
                            <input type="submit" value="Calculer">
                        </td>
                    </tr>
                </form>
            </table>
        </fieldset>
        <?php
                $tabPrixProco = array(
                    array("Intel Core i3-12100", number_format(175.00, 2)),
                    array("Intel Core i5-11600K", number_format(310.00, 2)),
                    array("Intel Core i7-12700K", number_format(520.00, 2)),
                    array("Intel Core i9-12900K", number_format(750.00, 2)),
                    array("AMD Ryzen 3 1200", number_format(90.00, 2)),
                    array("AMD Ryzen 5 5600X", number_format(300.00, 2)),
                    array("AMD Ryzen 7 5800X", number_format(480.00, 2)),
                    array("AMD Ryzen 9 5950X", number_format(780.00, 2))
                    );


                $tabPrixRam = array(
                    array("4 Go", number_format(40.00, 2)),
                    array("8 Go", number_format(78.00, 2)),
                    array("16 Go", number_format(180.00, 2)),
                    array("32 Go", number_format(315.00, 2)),
                    array("64 Go", number_format(400.00, 2)),
                    array("128 Go", number_format(800.00, 2))
                    );

                $tabPrixOS = array( 
                    array("Windows 10", number_format(85.00, 2)),
                    array("Windows 11", number_format(135.00, 2)),
                    array("ChromeOS", number_format(55.00, 2)),
                    array("CentOS", number_format(0.00, 2)),
                    );

                $tabPrixOption = array(
                    array("Ecran", number_format(110.00, 2)),
                    array("Clavier", number_format(25.00, 2)),
                    array("Souris", number_format(15.00, 2))
                    );
                if (!empty($_POST["denomination"]) && !empty($_POST["adresse"]) && !empty($_POST["cpLoc"]) && !empty($_POST["isAssujeti"]) && !empty($_POST["proco"]) && !empty($_POST["ram"]) && !empty($_POST["wichOS"])) 
                    {
                        if (isset($_POST["denomination"]) && isset($_POST["adresse"]) && isset($_POST["cpLoc"]) && isset($_POST["isAssujeti"]) && isset($_POST["proco"]) && isset($_POST["ram"]) && isset($_POST["wichOS"])) 
                            {

                                $denomination = $_POST["denomination"];
                                $adresse = $_POST["adresse"];
                                $cpLoc = $_POST["cpLoc"];
                                $isAssujeti = $_POST["isAssujeti"];
                                $proco = $_POST["proco"];
                                $ram = $_POST["ram"];
                                $wichOS = $_POST["wichOS"];
                                $option = $_POST["option"];

                                echo "Votre identification est " . $denomination . ".<br>";
                                echo "Votre adresse est " . $adresse . " à " . $cpLoc . ".<br>";
                                echo "Votre devis contient les éléments suivants : ";

                                $thtva = 0;
        ?>
        <table>
            <tr>
                <td><?php echo $proco ?></td>
                <td>
                <?php
                foreach ($tabPrixProco as $key => $value) {
                    if ($proco == $value[0]) {
                        echo $value[1] . " €";
                        $thtva += $value[1];
                    }
                }

                ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $ram ?></td>
                <td>
                <?php
                foreach ($tabPrixRam as $key => $value) {
                    if ($ram == $value[0]) {
                        echo $value[1] . " €" ;
                        $thtva += $value[1];
                    }
                }

                ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $wichOS ?></td>
                <td>
                <?php

                foreach ($tabPrixOS as $key => $value) {
                    if ($wichOS == $value[0]) {
                        echo $value[1] . " €" ;
                        $thtva += $value[1];
                    }
                }

                ?>
                </td>
            </tr>
                <!-- $tabPrixOption[0][1],$tabPrixOption[1][1] ,$tabPrixOption[2][1] -->
                    <?php
                        foreach ($option as $indice => $value) {
                            foreach ($tabPrixOption as $key => $valeur) {
                                if ($value == $valeur[0]) {
                                    echo "<tr><td>";
                                    echo $valeur[0];
                                    echo "</td><td>";
                                    echo $valeur[1] . " €" ;
                                    echo "</td></tr>";
                                    $thtva += $valeur[1];
                                }
                            }
                        }
                    ?>
                    <tr>
                        <td>THTVA</td>
                        <td>
                            <?php
                            echo number_format($thtva, 2) . " €" ;
                            ?>
                        </td>
                    </tr>
                    <?php
                    $tva = $thtva * 1.21 - $thtva;
                    $ttvac = $thtva * 1.21;
                    if ($_POST["isAssujeti"] == "Assujeti") {
                        echo "<tr><td>";
                        echo "TVA (21%)";
                        echo "</td><td>";
                        echo number_format($tva, 2) . " €";
                        echo "</td></tr>";

                        echo "<tr><td>";
                        echo "TTVAC";
                        echo "</td><td>";
                        echo number_format($ttvac, 2) . " €";
                        echo "</td></tr>";
                    }
                    ?>
        </table>
        <p>Vous nous demandez :</p>
        <p>Rien ne vaut un Mac !</p>
    </center>
            <?php
                    }
                } else echo "<center><h2 style=\"color:red;\">Veuillez remplir les champs</h2></center>";
            ?>
</body>
</html>
