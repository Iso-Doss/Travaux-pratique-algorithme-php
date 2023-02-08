<?php

$erreurs = [];

$message = "";

$donnees = $_POST;

if (!isset($_POST["nombre"]) || (empty($_POST["nombre"]) && $_POST["nombre"] != 0)) {

    $erreurs["nombre"] = "Le champ nombre est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre"])) {

    $erreurs["nombre"] = "Le champ nombre 1 doit contenir des chiffres. Veuillez le remplir.";
}

if (empty($erreurs)) {

    $factoriel = 1;

    $nombre = $_POST["nombre"];

    if ($_POST["nombre"] < 0) {

        $nombre = -$_POST["nombre"];
    }

    if ($nombre > 0) {

        for ($i = $nombre; $i > 1; $i--) {

            $factoriel = $factoriel * $i;
        }
    }

    $message = "Le factoriel de " . $_POST["nombre"] . " = $factoriel";
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
