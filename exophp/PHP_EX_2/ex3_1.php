<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 3 - 1 </title>
		<link rel="stylesheet" type="text/css" href="exstyle.css">
	</head>
	<body>
		<table>
			<tr>
				<th>Article</th>
				<th>Quantité</th>
				<th>Prix TVAC</th>
				<th>Valeur</th>
			</tr>
			<?php
				$tab = array( 
				"ACER 6200"=> array(21, 849.99, 11),
			    "THOSIBA 4002"=> array(21, 1014, 8),
				"PAPIER A4"=> array(6, 8.17, 214)
				);
				// print_r($tab);
				$totalAll = 0;

				foreach ($tab as $key => $value) {

					$prixTVAC = $value[1] * (1 + ($value[0] / 100));
					$totalVenteProduit = $prixTVAC * $value[2];
					$totalAll+= $totalVenteProduit;

						echo "<tr>";
						echo "<td>$key</td>";
						echo "<td>$value[2]</td>";
						echo "<td>$prixTVAC</td>";
						echo "<td>$totalVenteProduit</td>";
						echo "</tr>";
					}
			?>
			<tr>
				<th colspan="3">Total des ventes</th>
				<th><?= $totalAll ?></th>
			</tr>
		</table>
	</body>
</html>

