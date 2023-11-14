<?php
require_once("./Configuration/connexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $street = isset($_POST["street"]);
    $no_street = isset($_POST["no_street"]);
    $type = isset($_POST["type"]);
    $city = isset($_POST["city"]);
    $zipcode = isset($_POST["zipcode"]);

    $_SESSION['address_data'] = [
        'street' => $street,
        'no_street' => $no_street,
        'type' => $type,
        'city' => $city,
        'zipcode' => $zipcode
    ];

    header("Location: verification.php");
    exit();
} else {
    // Si la méthode HTTP n'est pas POST, rediriger vers la page d'accueil
    header("Location: index.php");
    exit();
}


?>