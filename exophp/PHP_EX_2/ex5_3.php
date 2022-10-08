<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="exstyle.css">
    <title>Exercie 5 - 3 </title>
</head>

<body>
    <center>
        <form method="GET" action="ex5_3.php">
            <fieldset>
                <legend>Formulaire d'inscirption</legend>
                <table>
                    <tr>
                        <td>Votre Nom : </td>
                        <td><input type="text" name="nom" size="15"></td>
                    </tr>
                    <tr>
                        <td>Votre Prenom : </td>
                        <td><input type="text" name="prenom" size="15"></td>
                    </tr>
                    <tr>
                        <td>Votre date de naissance (jj/mm/aaaa) : </td>
                        <td><input type="text" name="dateNaissance" size="15"></td>
                    </tr>
                    <tr>
                        <td>Votre e-mail : </td>
                        <td><input type="text" name="email" size="15"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><input type="submit" value="Envoyez"></center>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <?php

        setlocale(LC_ALL, "fr_FR");

        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $dateNaissance = $_GET["dateNaissance"];
        $email = $_GET["email"];

        if (isset($nom) && isset($prenom) && isset($dateNaissance) && isset($email) && !empty($nom) && !empty($prenom) && !empty($dateNaissance) && !empty($email)) {

            if (strlen($nom) <= 20) {
                if (strlen($prenom) <= 20) {
                    echo "Bonjour " . $prenom . " ";
                    echo $nom;
                    echo "<br>";
                } else echo '<p style="color:red;">Votre prénom est trop long<p>';
            } else echo '<p style="color:red;">Votre nom est trop long<p>';

            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                echo '<p style="color:red;">Votre email est incorrect<p>';
            }

            $jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

            $mois = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

            $datefr = $jour[date("w")] . " " . date("d") . " " . $mois[date("n")] . " " . date("Y");

            echo "Aujourd'hui, nous sommes le " . $datefr . "<br>";


            $separateur = "/";
            $dateNaissanceSeparée = explode($separateur, $dateNaissance);

            $dateIsGood = checkdate($dateNaissanceSeparée[1], $dateNaissanceSeparée[0], $dateNaissanceSeparée[2]);

            $jourNaissance = $jour[date("w", mktime(0, 0, 0, $dateNaissanceSeparée[1], $dateNaissanceSeparée[0], $dateNaissanceSeparée[2]))];
            $chiffreJourNaissance = $dateNaissanceSeparée[0];
            $moisNaissance = $mois[date("n", mktime(0, 0, 0, $dateNaissanceSeparée[1], $dateNaissanceSeparée[0], $dateNaissanceSeparée[2]))];
            $anneeNaissance = date("Y", mktime(0, 0, 0, $dateNaissanceSeparée[1], $dateNaissanceSeparée[0], $dateNaissanceSeparée[2]));


            if ($dateIsGood == true) {
                echo "Vous etes né le " . $jourNaissance . " " . $chiffreJourNaissance . " " . $moisNaissance . " " . $anneeNaissance . "<br>";
            } else echo '<p style="color:red;">Votre date est incorrecte<p>';

            if (date("n", time()) < $moisNaissance && date("j", time()) < $jourNaissance) {
                $age = (date("Y") - $dateNaissanceSeparée[2]) - 1;
                echo "Vous avez " . $age . " ans";
            } else {
                $age = date("Y") - $dateNaissanceSeparée[2];
                echo "Vous avez " . $age . " ans";
            }
        } else echo '<p style="color:red;">Veuillez remplir tous les champs du formulaire<p>';
        ?>
    </center>
</body>

</html>