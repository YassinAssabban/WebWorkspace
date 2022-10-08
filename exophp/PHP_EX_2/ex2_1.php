<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 2-1</title>
		<link rel="stylesheet" type="text/css" href="exstyle.css">
	</head>
	<body>
		<table style="border: 1px; width: 450px; height: 450px;">
			<caption>Tirages aléatoire</caption>
			<tr>
				<td>Essai</td>
				<td colspan="3">Valeurs</td>
			</tr>
			<?php
				
				$nb1 = 0;
				$nb2 = 0;
				$nb3 = 0;
				$cpt = 0;
				
				do {
					$nb1 = rand(1,999);
					$nb2 = rand(1,999);
					$nb3 = rand(1,999);
					
					$cpt++;
					echo "<tr>";
					echo "<td>$cpt</td>";
					echo "<td>$nb1</td>";
					echo "<td>$nb2</td>";
					echo "<td>$nb3 </td>";
					echo "</tr>";
					
					
				} while ($nb1 % 2 == 1 OR $nb2 % 2 == 0 OR $nb3 % 2 == 0);
				
				echo "<td colspan=\"4\">Résultat obtenu en $cpt essai</td>";
			?>
			
		</table>
	</body>
</html>