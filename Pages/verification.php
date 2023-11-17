<?php
require_once("../functions/valider.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $street = $_POST["street"];
    $no_street = $_POST["no_street"];
    $type = $_POST["type"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];

    // Valider les données
    $isValid = (
        validateStreet($street) &&
        validateZipcode($zipcode)
    );

    if ($isValid) {
        // Les données sont valides

    } else {
        // Les données ne sont pas valides, afficher un message d'erreur 
        if (!validateStreet($street)) {
            echo "Rue saisi invalide" ;
        } 
        if (!validateZipcode($zipcode)) {
            echo "Zipcode saisi invalide" ;
        }
        echo "Le(s) donnée(s) ne sont pas valides. Veuillez corriger les erreurs.";
        ?> <br><br> <button onclick="window.history.back();" class="confirm">Retour</button> <?php
        exit();

    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verification</title>
    <link rel="stylesheet" href="../styles/affiche.css"/>
</head>
<body>
    <div>
        <?php
        var_dump($_POST);
        $result = $_POST;
        echo "<form action=''>" ;
        if(count($result) >0) {
            foreach($result as $key => $value) {
                echo "<input type = 'text' id = '$key' value= '$value' readonly /> <br>" ;
            }
        }
        echo "</form>";
        ?>
    </div>
    <h2>Veuillez confirmer si vos informations sont corrects ou annuler dans le cas contraire</h2>
    <button type="submit" name ="approuver" class="but">Confirmer</button>
     <button onclick="window.history.back();" class="annuler">Annuler</button> 
    </form>
</body>
</html>
  
<!-- TO DO -->
<!--onclick="window.location.href='adress.php';" : alternatif-->
<!-- comment afficher les donnes saisies "verification.php-->
<!-- comment faire une boucle pour repeter le formulaire le nombre de fois que l'utilisateur demande :adress.php--> 