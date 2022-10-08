<!DOCTYPE html>
<html>
    <head>
        <title>Ex7-4</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="exstyle.css">
    </head>

    <body>
        <center>
            <form method="POST" action="ex7_4bis.php">
                <fieldset>
                    <table>
                            <legend style="text-align: center;">Base de données jeuxvideos</legend>
                            <tr>
                                <td><label> Possesseur</label></td>
                                <td><input type="name" name="possesseur"></td>
                            </tr>
                            <tr>
                                <td><label> Console </label></td>
                                <td><input type="name" name="console"></td>
                            </tr>
                            <tr>
                                <td><input type="reset" value="Effacer"></td>
                                <td><input type="submit" value="Rechercher"></td>
                            </tr>
                    </table>
                </fieldset>
            </form>
        </center>
    </body>
</html>