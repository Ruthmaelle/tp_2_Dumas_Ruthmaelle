<?php
require_once("./functions/validation/");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $street = $_POST["street"];
    $no_street = $_POST["no_street"];
    $type = $_POST["type"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];

    // Valider les données
    $isValid = (
        validateStreet($street) &&
        validateStreetNumber($no_street) &&
        validateZipcode($zipcode)
    );

    if ($isValid) {
        // Les données sont valides
        echo "Les données sont valides.";
    } else {
        // Les données ne sont pas valides, afficher un message d'erreur 
        echo "Les données ne sont pas valides. Veuillez corriger les erreurs.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php

    // verification_page.php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $street = $_POST["street"];
        $no_street = $_POST["no_street"];
        $type = $_POST["type"];
        $city = $_POST["city"];
        $zipcode = $_POST["zipcode"];

        // Afficher les données pour vérification
        echo "<p>Street: $street</p>";
        echo "<p>Street Number: $no_street</p>";
        echo "<p>Type: $type</p>";
        echo "<p>City: $city</p>";
        echo "<p>Zip Code: $zipcode</p>";

    } 
        
        else {
        // Rediriger vers la page d'erreur si les données ne sont pas disponibles
        header("Location: error_page.php");
        exit(); }
    ?>

    <button type="submit" name ="approuver">Confirmer</button>
    <button type="button" onclick="window.location.href='address.php';">Annuler</button>
    </form>
</body>
</html>
  
<!-- TO DO -->
<!--onclick="window.location.href='adress.php';" : alternatif-->
<!-- comment afficher les donnes saisies "verification.php-->
<!-- comment faire une boucle pour repeter le formulaire le nombre de fois que l'utilisateur demande :adress.php--> 