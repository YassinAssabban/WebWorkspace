<!DOCTYPE html>
<html2 lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Home : Selectionner un joueur</title>
</head>

<body>
<?php require "viewNavbar.php";  ?>
<img src="crud-icon\homepage.jpg" width="100%">
    <!-- <form method="post" action="index.php">
        
        <table class="tbl-qa">
            <thead>
                <tr> 
                    <th class="table-header" width="10%">ID</th>
                    <th class="table-header" width="20%">Pseudo</th>
                    <th class="table-header" width="10%">Points de vie</th>
                </tr>
            </thead>
            <tbody id="table-body">
                
                  <?php
                if (!empty($result)) {
                    foreach ($result as $key => $row) {
                ?>
                        <tr class="table-row">
                            <td><?php echo $row["person_id"]; ?></td>
                            <td><?php echo $row["pseudo"]; ?></td>
                            <td><?php echo $row["pointsVie"]; ?></td>
                            <td><a class="ajax-action-links" href='index.php?id=<?php echo $row['person_id']; ?>'><img src="crud-icon/swords.png" title="Attaque" /></a><a class="ajax-action-links" href='index.php?iddel=<?php echo $row['person_id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
                        </tr>
                <?php
                    }
                } 
                ?> 
            </tbody>
        </table> 
    </form>
    <div class="div"><a href="index.php?createPersonnage=ajouter" class="button_link"><img src="crud-icon/add.png" title="Ajouter un nouveau personnage" style="vertical-align:bottom;" /> Créer</a></div>
-->
</body>
</html2>