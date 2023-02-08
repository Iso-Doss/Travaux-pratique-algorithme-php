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

    $message = "";

    for ($i = 0; $i <= 10; $i++) {

        $message = $message . $_POST["nombre"] . " * $i = " . $_POST["nombre"] * $i . "<br/>";

        //$message .= $_POST["nombre"] . " * $i = " . $_POST["nombre"] * $i . "<br/>";

    }
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
