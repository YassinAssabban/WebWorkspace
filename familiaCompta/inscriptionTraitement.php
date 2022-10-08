<?php
require_once 'config.php';

// test de contrôle afin de vérifier que tous les champs ont bien été remplit
if (isset($_POST['pseudo']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_POST['password_retype'])) {

    $pseudo = $_POST['pseudo'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $password_retype = $_POST['password_retype'];

    // Préparation et éxecution de la requête qui permet de récupérer le contenu de la table CLIENTS la ou l'email du client correspond a l'email entrée dans le formulaire
    $check = $bdd->prepare('SELECT pseudo, name, surname, pwd_users, phonenumber FROM users WHERE pseudo = ?');
    $check->execute(array($pseudo));

    // $data contient tous le contenu récupérer dans la requête du dessus
    $data = $check->fetch();
    $row = $check->rowCount();


    // vérification si le client existe déja
    if ($row == 0) {
        // controle de la taille du pseudo
        if (strlen($pseudo) <= 50) {
            // controle des deux mots de passe entre eux
            if ($password == $password_retype) {
                //cryptage du mot de passe 
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                // Préparation et éxecution de la requête qui permet de INSERER le contenu entrer dans le formulaire dans la table CLIENTS.
                $insert = $bdd->prepare('INSERT INTO users(pseudo, name, surname, pwd_users, phonenumber) VALUES(:pseudo, :name, :surname, :pwd_users, :phonenumber)');
                $insert->execute(array(

                    'pseudo' => $pseudo,
                    'name' => $name,
                    'surname' => $surname,
                    'pwd_users' => $password,
                    'phonenumber' => $phonenumber,

                ));
                header('Location:signUp.php?reg_err=success');
            } else header('Location: signUp.php?reg_err=password');
        } else header('Location: signUp.php?reg_err=pseudo_length');
    } else header('Location: signUp.php?reg_err=already');
}
?>
<!-- https://www.youtube.com/watch?v=jEgzxXCB9-w&t=538s&ab_channel=NoS1gnal-->