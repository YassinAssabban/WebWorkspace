<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 4 - 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="exstyle.css">
	</head>
	<body>
		<center>
			<fieldset>
			<legend style="text-align:center;">Merci d'introduire vos données</legend>
				<table>
					<form method="POST" action="ex4_2.php">
						<tr>
							<td>
								<label>Nom : </label>
							</td>
							<td>
								<input type="text" name="nom">
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Prénom : </label>
							</td>
							<td>
								<input type="text" name="prenom">
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Age : </label>
							</td>
							<td>
								<input type="number" name="age">
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Pays : </label>
							</td>
							<td>
								<select name="pays">
									<option value="Belgique">Belgique</option>
									<option value="France">France</option>
									<option value="Suisse">Suisse</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Espagne">Espagne</option>
									<option value="Pays-Bas">Pays-Bas</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Langues pratiquées : </label>
							</td>
							<td>
								<select name="lang[]" size="6" multiple>
									<option value="Français" name="lang">Français</option>
									<option value="Espagnol">Espagnol</option>
									<option value="Anglais">Anglais</option>
									<option value="Italien">Italien</option>
									<option value="Néérlandais">Néex@rlandais</option>
									<option value="Allemand">Allemand</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<label>Connaisances en informatique : </label>
							</td>
							<td>
								<table>
									<tr>
										<td>
											<label>HTML</label>
										</td>
										<td>
											<input type="checkbox" name="skill[]" value="HTML">
										</td>
									</tr>
									<tr>
										<td>
											<label>CSS</label>
										</td>
										<td>
											<input type="checkbox" name="skill[]" value="CSS">
										</td>
									</tr>
									<tr>
										<td>
											<label>PHP</label>
										</td>
										<td>
											<input type="checkbox" name="skill[]" value="PHP">
										</td>
									</tr>
									<tr>
										<td>
											<label>SQL</label>
										</td>
										<td>
											<input type="checkbox" name="skill[]" value="SQL">
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="reset" value="Effacer">
							</td>
							<td>
								<input type="submit" value="Envoyer">
							</td>
						</tr>
					</form>
				</table>
			</fieldset>
		</center>
	</body>
</html>

<?php 
	if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["age"]) && !empty($_POST["pays"]) && !empty($_POST["lang"]) && !empty($_POST["skill"])) {
		if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["age"]) && isset($_POST["pays"]) && isset($_POST["lang"]) && isset($_POST["skill"])) {
			echo "Bonjour "; 
		echo "<b>", $_POST["prenom"], " " , $_POST["nom"], "</b><br>"; 
		echo "Age : ";
		echo $_POST["age"];
		echo " Ans<br>";
		echo "Pays : ";
		echo $_POST["pays"], "<br>";
		echo "Langues : ";
		
		$tabLang = $_POST["lang"];
			echo "<ul>";
				foreach ($tabLang as $key => $value) {
					echo "<li>" . $value . "</li>";
				}
			echo "</ul>";

			echo "Compétences informatiques :";

		$tabSkill = $_POST["skill"];

			echo "<ul>";
				foreach ($tabSkill as $key => $value) {
					echo "<li>" . $value . "</li>";
				}
			echo "</ul>";
		}
	} else echo "<center><h2 style=\"color:red;\">Veuillez remplir les champs</h2></center>";

	
?>