<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Créer son personnage</title>
</head>
<body>
<?php require "viewNavbar.php";  ?>
    <div class="frm-add">
        <h1 class="demo-form-heading">Ajouter un personnage</h1>
        <form name="frmAdd" action="" method="POST">
            <div class="demo-form-row">
                <label>Pseudo : </label><br>
                <input type="text" name="pseudo" class="demo-form-field" required />
            </div>
            <div class="demo-form-row">
                <input name="add_record" type="submit" value="Add" class="demo-form-submit">
            </div>
        </form>
    </div>
    <div class="div"><a href="index.php" class="button_link">Revenir à la liste</a></div>
</body>
</html>