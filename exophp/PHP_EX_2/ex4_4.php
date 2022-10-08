<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - 4</title>
    <link rel="stylesheet" type="text/css" href="exstyle.css">
</head>
<body>
<?php
            $login = $_POST["login"];
            $mdp = $_POST["mdp"];

            $tabLogin = array(
                "Sinyaa"=>"Lionne33" ,
                "Thomas"=>"catch67" ,
                "Benja"=>"ilovejeudesociete"
            );

            $tabLivre = array("Java pour débutants", "PHP pour débutants", "HTML & CSS pour débutants", "Javascript pour débutants");
            
            $flagLogin = false;
            $flagMdp = false;

            foreach ($tabLogin as $key => $value) {
                if ($login == $key) {
                    $flagLogin = true;
                    if ($mdp == $value) {
                        $flagMdp = true;
                    } 
                } 
            }
            if ($flagLogin == true) {
                if ($flagMdp == true) { ?>
                     <form method="POST" action="ex4_4_liste.php">
                        <center>
                            <legend>Introduisez votre mot-clef</legend>
                            <label>Mot-clé</label>
                            <input type="text" name="keyword" required size="15">
                            <br><br>
                            <input type="submit" value="Entrer">
                        </center>
                    </form>
            <?php
                } else { ?>
                    <form method="POST" action="#">
                        <center>
                            <legend>Introduisez vos informations</legend>
                            <label>Login </label>
                            <input type="text" name="login" required size="32"><br>
                            <label>Mot de passe </label>
                            <input type="text" name="mdp" required size="10">
                            <br><br>
                            <input type="submit" value="Entrer">
                        </center>
                    </form>
                    <?php
                    echo "<center><h2 style=\"color:red;\">Mot de passe incorrecte</h2></center>";

                }
            } else { ?>
                <form method="POST" action="#">
                    <center>
                        <legend>Introduisez vos informations</legend>
                        <label>Login </label>
                        <input type="text" name="login" required size="32"><br>
                        <label>Mot de passe </label>
                        <input type="text" name="mdp" required size="10">
                        <br><br>
                        <input type="submit" value="Entrer">
                    </center>
                </form>
                <?php
                echo "<center><h2 style=\"color:red;\">Login incorrecte</h2></center>";
            }
        ?>
</body>
</html>
