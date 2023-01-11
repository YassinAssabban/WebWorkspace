<html>

<head>
    <link href="css/style.css" rel="stylesheet">
    <title>PHP PDO CRUD - Add New Record</title>
</head>

<body>
    <div class="div"><a href="index.php" class="button_link">Back to List</a></div>
    <div class="frm-add">
        <h1 class="demo-form-heading">Add New Record</h1>
        <form name="frmAdd" action="" method="POST">
            <div class="demo-form-row">
                <label>Nom : </label><br>
                <input type="text" name="nom" class="demo-form-field" required />
            </div>
            <div class="demo-form-row">
                <label>Prenom : </label><br>
                <input type="text" name="prenom" class="demo-form-field" required />
            </div>
            <div class="demo-form-row">
                <label>Age: </label><br>
                <input type="text" name="age" class="demo-form-field" required />
            </div>
            <div class="demo-form-row">
                <input name="add_record" type="submit" value="Ajouter" class="demo-form-submit">
            </div>
        </form>
    </div>
</body>

</html>