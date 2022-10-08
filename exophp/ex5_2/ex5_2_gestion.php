<!DOCTYPE html>
<html>
<head>
    <title>Ex5-2<-Gestion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="exstyle.css">
</head>
<body>
<center>
<form method="POST" action="ex5_2_gestion2.php">
<legend>Virements</legend><br>
<label> Bienvenue :</label>
<?php 

$mr = $_POST["name"];
echo "<input type=\"name\" value=\"$mr\" size=13>" ;


?>
    <br><br>
    <label>Montant du virement :</label>
    <input type="number" style="width:100px;">
    <input type="submit" value="Entrer">

    </form>
    </center>
</body>
</html>