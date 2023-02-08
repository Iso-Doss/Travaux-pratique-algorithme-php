<?php

$erreurs = [];

if (isset($_GET["errors"]) && !empty($_GET["errors"])) {

    $erreurs = json_decode($_GET["errors"], true);
}

$donnees = [];

if (isset($_GET["donnees"]) && !empty($_GET["donnees"])) {

    $donnees = json_decode($_GET["donnees"], true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriel</title>
</head>

<body>

    <h1>
        Factoriel
        <?= (isset($donnees["nombre"]) && (!empty($donnees["nombre"]) || ["nombre"] == 0)) ? $donnees["nombre"] : "" ?>
    </h1>

    <form method="POST" action="/exercice-17/traitement-index.php">

            <?php if (isset($_GET["message"]) && !empty($_GET["message"])) { ?>
                <tr>
                    <td colspan="2">
                        <p style="background-color: green; color: white; padding: 10px">
                            <?php echo $_GET["message"]; ?>
                        </p>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td>
                    <label for="nombre">Nombre :</label>
                </td>
                <td>
                    <input type="number" name="nombre" id="nombre" class="nombre" placeholder="Veuillez entrer le nombre" 
                    value="<?= (isset($donnees["nombre"]) && (!empty($donnees["nombre"]) || ["nombre"] == 0)) ? $donnees["nombre"] : "" ?>" />
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p style="color: red;">
                        <?= (isset($erreurs["nombre"]) && !empty($erreurs["nombre"])) ? $erreurs["nombre"] : "" ?>
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Annuler">
                </td>
                <td>
                    <input type="submit" value="Envoyer" />
                </td>
            </tr>

        </table>
    </form>

</body>

</html>