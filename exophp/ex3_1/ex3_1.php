<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css"  href="exstyle.css">
</head>
<body>
<table>

<tr>
    <td>Article</td>
    <td>Quantité</td>
    <td>Prix TVAC</td>
    <td>Valeur</td>
    </tr>
<?php

    $tableau = Array (
    "ACER 6200" => Array ( 21 ,849.99 ,11 ) ,
    "TOSHIBA 4002" => Array ( 21 ,1014 ,8 ) ,
    "PAPIER A4" => Array ( 6 ,8.17 ,214 ) );
$somme = 0;
foreach ($tableau as $key=>$value)
{
$tvac = $value[1]*(($value[0]/100)+1);
$tvac = round($tvac,2);
$valeur = $tvac *$value[2];
$valeur = round($valeur,2);
$somme = $somme + $valeur;

echo "
<tr>
<td>$key</td>
<td>$value[2]</td>
<td>$tvac</td>
<td>$valeur</td>
</tr> ";
}
// round  (arondi)
// number_format (nombre de virgule)
?>
<tr>
<td colspan="3">Total des ventes</td>
<td><?php echo $somme; ?></td>
</tr>

</table>
</body>
</html>

