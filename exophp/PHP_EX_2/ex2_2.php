<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 2.2</title>
		<link rel="stylesheet" type="text/css" href="exstyle.css">
	</head>
	<body>
		<table style="border: 1px; width: 450px; height: 450px;">
				<?php
					$ligne;
					$col;
					$cpt = 1;
					
					for ($ligne=0; $ligne < 8; $ligne++) {
						echo "<tr>"; 
					?>
				<?php
						for ($col=0; $col < 8 ; $col++) {
							
							if ($cpt % 2 == 0 && $ligne % 2 == 0 || $cpt % 2 == 1 && $ligne % 2 == 1) {
								echo "<td style=\"background:#FFFFBB; text-align: center;\">$cpt</td>";
							} else {
								echo "<td style=\"background:#6495ed; text-align: center;\">$cpt</td>";
							}
						$cpt++;
						}
						echo "</tr>";
					}
				?>
		</table>
	</body>
</html>

<!-- 
if ($cpt / 2 == 0) {
	   echo "<td style=\"background:#FFFFBB;\">$cpt</td>";
} else echo "<td style=\"background:#6495ed;\">$cpt</td>";

echo "<tr>";


QUAND LIGNE IMPAIRE  && CPT IMPAIRE -> jaune
QUAND LIGNE PAIRE    && CPT PAIRE -> bleu


-->
