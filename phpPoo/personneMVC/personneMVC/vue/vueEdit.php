<html>

<head>
    <link href="css/style.css" rel="stylesheet">
    <title>PHP PDO CRUD - Edit Record</title>
</head>

<body>
    <div class="div"><a href="index.php" class="button_link">Back to List</a></div>
    <div class="frm-add">
        <h1 class="demo-form-heading">Edit Record</h1>
        <form name="frmAdd" action="" method="POST">
            <?php
            foreach ($result as $key => $value) {
                if ($value['person_id'] == $_GET['idedit']) {
                    $cpt = $key;
                }
            }
            ?>
            <div class="demo-form-row">
                <label>Nom: </label><br>
                <input type="text" name="nom" class="demo-form-field" value="<?php echo $result[$cpt]['nom']; ?>" required />
            </div>
            <div class="demo-form-row">
                <label>Prenom : </label><br>
                <input type="text" name="prenom" class="demo-form-field" value="<?php echo $result[$cpt]['prenom']; ?>" required />
            </div>
            <div class="demo-form-row">
                <label>Age : </label><br>
                <input type="text" name="age" class="demo-form-field" value="<?php echo $result[$cpt]['age']; ?>" required />
            </div>
            <div class="demo-form-row">
                <input name="save_record" type="submit" value="Save" class="demo-form-submit">
            </div>
        </form>
    </div>
</body>

</html>