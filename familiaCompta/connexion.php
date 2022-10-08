<?php
    session_start();
    require_once 'config.php';

    if (isset($_POST['pseudo']) && isset($_POST['password']))
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];

        // Préparation et éxecution de la requête qui permet de récupérer le contenu de la table CLIENTS la ou l'email du client correspond a l'email entrée dans le formulaire de connexion
        $check = $bdd->prepare('SELECT pseudo, email, id_cli, role, nom_cli, prenom_cli, password FROM clients WHERE email = ?');
        $check->execute(array($email));

        // $data contient tous le contenu récupérer dans la requête du dessus
        $data = $check->fetch();
        $row = $check->rowCount();

        // vérification si le client existe déja
        if ($row == 1) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //$password = password_hash($password, PASSWORD_DEFAULT);
                if(password_verify($password, $data['password'])){
                //if($data['password'] === $password) {

                    $_SESSION['userName'] = $data['pseudo'];
                    $_SESSION['userID'] = $data['id_cli'];
                    $_SESSION['userEmail'] = $data['email'];
                    $_SESSION['role'] = $data['role'];
                    $_SESSION['userSurname'] = $data['nom_cli'];
                    $_SESSION['userFirstname'] = $data['prenom_cli'];
                    header('Location:index.php');

                }else header('Location:connect.php?login_err=password');
            }else header('Location:connect.php?login_err=email');
        }else header('Location:connect.php?login_err=already');
    }
?>
<!-- https://www.youtube.com/watch?v=jEgzxXCB9-w&t=538s&ab_channel=NoS1gnal-->