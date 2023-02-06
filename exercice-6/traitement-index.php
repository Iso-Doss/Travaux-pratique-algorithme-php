<?php

$erreurs = [];

$message = "";

$donnees = $_POST;

if (!isset($_POST["nombre-1"]) || (empty($_POST["nombre-1"]) && $_POST["nombre-1"] != 0)) {

    $erreurs["nombre-1"] = "Le champ nombre 1 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-1"])) {

    $erreurs["nombre-1"] = "Le champ nombre 1 doit contenir des chiffres. Veuillez le remplir.";
}

if (!isset($_POST["nombre-2"]) || (empty($_POST["nombre-2"]) && $_POST["nombre-2"] != 0)) {

    $erreurs["nombre-2"] = "Le champ nombre 2 est vide. Veuillez le remplir.";
} else if (!is_numeric($_POST["nombre-2"])) {

    $erreurs["nombre-2"] = "Le champ nombre 2 doit contenir des chiffres. Veuillez le remplir.";
}

if (empty($erreurs)) {

    if ($_POST["nombre-1"] == 0) {

        $message = "Cette équation n'admet pas de solution parce que le nombre 1 (a) est égale a 0";

    } else {

        $message = "La solution de cette équation est : " . -$_POST["nombre-2"] / $_POST["nombre-1"];
        
    }
}

header("location: index.php?message=$message&errors=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees));
