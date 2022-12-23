<!DOCTYPE html>
<html2 lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Home : Selectionner un joueur</title>
</head>

<body>
<?php require "viewNavbar.php";  ?>
    <form method="post" action="index.php">
        <div class="div"><a href="index.php?create=add" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Create</a></div>
        <table class="tbl-qa">
            <thead>
                <tr>
                    <th class="table-header" width="20%">ID</th>
                    <th class="table-header" width="40%">Nom</th>
                    <th class="table-header" width="20%">Prenom</th>
                    <th class="table-header" width="5%">Age</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <?php
                if (!empty($result)) {
                    foreach ($result as $key => $row) {
                ?>
                        <tr class="table-row">
                            <td><?php echo $row["person_id"]; ?></td>
                            <td><?php echo $row["nom"]; ?></td>
                            <td><?php echo $row["prenom"]; ?></td>
                            <td><?php echo $row["age"]; ?></td>
                            <td><a class="ajax-action-links" href='index.php?idedit=<?php echo $row['person_id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='index.php?iddel=<?php echo $row['person_id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </form>    
</body>
</html2>