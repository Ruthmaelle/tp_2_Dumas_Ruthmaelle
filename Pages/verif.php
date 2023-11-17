<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si le champ "Nbr_addresse" est défini dans la soumission POST
    if (isset($_POST["Nbr_addresse"]) && is_numeric($_POST["Nbr_addresse"])) {
        $nbr = intval($_POST["Nbr_addresse"]);

        // Vérifiez si le nombre d'adresses est au moins 2
        if ($nbr >= 2) {
            // Créez un tableau pour stocker les ensembles d'adresses
            $ensemblesAdresses = array();

            // Boucle pour récupérer et stocker les données de chaque ensemble
            for ($i = 1; $i <= $nbr; $i++) {
                $ensemble = array(
                    'street' => $_POST["street{$i}"],
                    'no_street' => $_POST["no_street{$i}"],
                    'type' => $_POST["type{$i}"],
                    'city' => $_POST["city{$i}"],
                    'zipcode' => $_POST["zipcode{$i}"]
                );

                // Ajoutez l'ensemble au tableau
                $ensemblesAdresses[] = $ensemble;
            }

            // Affichez tous les ensembles d'adresses
            foreach ($ensemblesAdresses as $ensemble) {
                echo "<fieldset>";
                echo "<legend>Vos coordonnées</legend>";
                echo "<p>Street/Rue: {$ensemble['street']}</p>";
                echo "<p>No street/No Rue: {$ensemble['no_street']}</p>";
                echo "<p>Type: {$ensemble['type']}</p>";
                echo "<p>Province/City/Ville: {$ensemble['city']}</p>";
                echo "<p>Zipcode: {$ensemble['zipcode']}</p>";
                echo "</fieldset>";
            }
        } else {
            echo "<p>Le nombre d'adresses doit être au moins 2.</p>";
        }
    } else {
        echo "<p>Saisie invalide. Veuillez retourner à la page précédente et saisir un nombre valide.</p>";
    }
} else {
    echo "<p>Accès non autorisé.</p>";
}
?>

</body>
</html>
