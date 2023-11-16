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

<!--onclick="window.location.href='adress.php';" -->
<!-- comment afficher les donnes saisies -->
<!-- comment faire une boucle pour repeter le formulaire --> 