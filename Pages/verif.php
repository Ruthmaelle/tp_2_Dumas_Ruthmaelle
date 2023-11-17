<?php
require_once("../Configuration/connexion.php");
require_once("./address.php");
require_once("../functions/validation");
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'utilisateur a saisi un nombre
        $nbr = intval($_SESSION["Nbr_addresse"]);

        // Tableau pour stocker les adresses valides
        $addresses = [];

        for ($i = 1; $i <= $nbr; $i++) {
            // Récupérer les données du formulaire pour chaque adresse
            $street = $_POST["street$i"];
            $no_street = $_POST["no_street$i"];
            $type = $_POST["type$i"];
            $city = $_POST["city$i"];
            $zipcode = $_POST["zipcode$i"];

            // Valider les données pour chaque adresse
            if (
                validateStreet($street) &&
                validateZipcode($zipcode)
            ) {
                // ajouter les au tableau d'adresses
                $addresses[] = [
                    "street" => $street,
                    "no_street" => $no_street,
                    "type" => $type,
                    "city" => $city,
                    "zipcode" => $zipcode
                ];
            } else {
                // Gérer l'erreur ou afficher un message d'erreur spécifique
                echo "Erreur dans les données de l'adresse $i. Veuillez vérifier et corriger.";
            }
        }

        // Afficher les adresses valides
        echo "<h2>Adresses saisies :</h2>";
        foreach ($addresses as $index => $address) {
            echo "<p><strong>Adresse " . ($index + 1) . ":</strong> " . implode(", ", $address) . "</p>";
        }

    
        if (isset($_POST['confirmer'])) {
            // Insérer les adresses dans la base de données ici
            // Exemple : Utilisez une connexion à la base de données et exécutez une requête SQL INSERT
            // $conn = new mysqli("localhost", "username", "password", "database");
            // foreach ($addresses as $address) {
            //     // Exécutez la requête d'insertion ici
            // }
            // Fermez la connexion à la base de données
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>
    <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>
    <!-- Affichez les adresses valides -->
    <!-- ... -->
    
    <!-- Bouton pour confirmer l'envoi vers la base de données -->
    <form action="" method="post">
        <button type="submit" name="confirmer" class="confirmer">Confirmer et Enregistrer dans la base de données</button>
    </form>
</body>
</html>
