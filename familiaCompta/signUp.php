<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="logo/monitor.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
*{
  box-sizing: border-box;
}
body{
    background: #cd6c6c;
  }
  /* Add padding to containers */
  .container {
    padding: 16px;
    /* margin: 8px 20%; */

  }
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
/* label{
    margin: 8px 20%;
} */
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  /* Overwrite default styles of hr */
  hr {
    /* width: 100%; */
    border: 1px solid #4CAF50;
    margin-bottom: 25px;
  }
  /* Set a style for the submit button */
  .registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  .registerbtn:hover {
    opacity: 1;
  }
  /* Add a blue text color to links */
  a {
    color: rgb(4, 82, 24);
  }
  
  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    text-align: center;
  }
  </style>
<body>
    <header>
    <div class="lisere">
          <a href="index.php"><img src="logoNDRA.png" class="logolis"></a>
      </div>
    </header>
      <?php 

        if(isset($_GET['reg_err']))
        {
          $err = $_GET['reg_err'];

          switch ($err) {
            case 'success':
              ?>
                <div class="alert alert-succes" style="text-align: center; font-size: 24px;">
                  <strong>Succès</strong> Inscription réussie !
                </div>
              <?php
              break;
  
              case 'password':
              ?>
                <div class="alert alert-danger">
                  <strong>Erreur</strong> Mot de passe différent
                </div>
            <?php
            break;
  
            case 'email':
            ?>
                <div class="alert alert-danger">
                  <strong>Erreur</strong> email non valide
                </div>
            <?php
            break;

            case 'email_length':
              ?>
                <div class="alert alert-danger">
                  <strong>Erreur</strong> email trop long
                </div>
            <?php
            break;

            case 'pseudo_length':
              ?>
                  <div class="alert alert-danger">
                    <strong>Erreur</strong> pseudo trop long
                  </div>
              <?php
              break;

              case 'already':
                ?>
                    <div class="alert alert-danger">
                      <strong>Erreur</strong> compte déja existant
                    </div>
                <?php
                break;

          }
        }
      ?>
    <form action="inscriptionTraitement.php" method="post">
        <div class="container">
          <h1>S'enregistrer</h1>
          <p>Pour créer votre compte. Veuillez remplir ce formulaire.</p>
          <hr>
          <label for="pseudo"><b>Pseudo</b></label>
          <br>
          <input type="text" placeholder="Enter Pseudo" name="pseudo" id="pseudo" required>
          <br>
          <label for="name"><b>Name</b></label>
          <br>
          <input type="text" placeholder="Enter Name" name="name" id="name" required>
          <br>
          <label for="surname"><b>Surname</b></label>
          <br>
          <input type="text" placeholder="Enter surname" name="surname" id="surname" required>
          <br>
          <label for="phonenumber"><b>Phone Number (Ex : 5552545)</b></label>
          <br>
          <input type="text" placeholder="Enter phonenumber" name="phonenumber" id="name" required>
          <br>
          <label for="password"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          <br>
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <br>
          <input type="password" placeholder="Repeat Password" name="password_retype" id="password_retype" required>
          <hr>
          <p>En créant ce compte vous acceptez nos conditions d'utilisateur <a href="#">Terms & Privacy</a>.</p>

          <button type="submit" class="registerbtn">Créer mon compte</button>
        </div>
        <div class="container signin">
          <p>Déja un compte? <a href="connect.php">Sign in</a>.</p>
        </div>
      </form>
<div class="pousse-footer"></div>
<!-- https://www.youtube.com/watch?v=jEgzxXCB9-w&t=538s&ab_channel=NoS1gnal-->
<footer>
                    <p>Copyright © Made In Config. Inc.</p>
                    <p>Créé par Yassin Assabban dans le cadre d'études d'IG à la l'HELHa.</p>
                    <p>Attention toutes les informations de ce site web sont fausses rien n'est à vendre ici.</p>
                    <p>Toute reproduction même partielle de ce site web ou de son contenu est strictement interdite.</p> 
            </footer>
            </body>
</html>