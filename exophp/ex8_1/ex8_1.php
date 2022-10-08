<!DOCTYPE html>
<html>
<head>
        <title>Ex8-1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="exstyle.css">
    </head>
    <body>
        <center>
                <form method="POST">
                    <fieldset>
                            <?php
                            function connexionDB()
                            {
                                if($connexion = new PDO ("mysql:host=localhost;dbname=quiz",
                                "root", ""))
                            {
                                $connexion->setAttribute(PDO::ATTR_ERRMODE,
                                PDO::ERRMODE_EXCEPTION);
                                return $connexion;
                            }
                            }
                            $cnx = connexionDB();
                            $requete = $cnx->prepare("SELECT * FROM quiz");
                            $requete->execute();
                            $tbResult = $requete->fetchAll();

                            $rand = rand(1, 40);
                            $questionRand =  $cnx -> query("SELECT * FROM quiz WHERE num_quest = $rand");
                            $i = 0;
                            $j = $i + 1;
                            $nbRep = 0;

                                foreach ($questionRand as $record) {
                                    $numQuestion = $record["num_quest"];
                                    $question = $record["question"];
                                    $rep1 = $record["r1"];
                                    $rep2 = $record["r2"];
                                    $rep3 = $record["r3"];
                                    $rep4 = $record["r4"];
                                    $repTrue = $record["reponse"];


                                echo "<table>";
                                echo "<legend style=\"text-align: center;\">Question n°$j - Votre score actuel : $nbRep/$i </legend>";
                                echo"
                                <tr><th>$question</th></tr>
                                <tr><td><input type=\"radio\" name=\"choix\">$rep1</td></tr>
                                <tr><td><input type=\"radio\" name=\"choix\">$rep2</td></tr>
                                <tr><td><input type=\"radio\" name=\"choix\">$rep3</td></tr>
                                <tr><td><input type=\"radio\" name=\"choix\">$rep4</td></tr>
                                <tr><th><input type=\"submit\" value=\"GO\" name=\"bouton\"style=\"float: left;\"></th></tr>
                                ";
                                echo "</table>";
                            }

                            ?>
                    </fieldset>
                </form>
            </center>
    </body>
</html>