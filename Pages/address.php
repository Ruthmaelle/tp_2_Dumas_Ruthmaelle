
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresse</title>
    <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>
    <?php


    
    
    //verifier si l'utilisateur entre un chiffre, si c'est un nombre a virgule on se charge de le convertir
    if (isset($_POST["Nbr_addresse"]) && is_numeric($_POST["Nbr_addresse"])) {
        $nbr = intval($_POST["Nbr_addresse"]);
        var_dump($_POST["Nbr_addresse"]);
        $_SESSION['Nbr_addresse'] = $nbr;

    ?>
    <form action="./verification.php"method="post">
        <?php
        for ($i = 1; $i<=$nbr; $i++){
        ?>
        <fieldset>
        <legend>Vos coordonées</legend>
        <label for="street<?php echo $i; ?>">Street/Rue:</label> <br>
        <input type="text" name="street<?php echo $i; ?>" id="street<?php echo $i; ?>" required> <br><br>

    <label for="no_street<?php echo $i; ?>">No street/No Rue:</label> <br>
    <input type="number" name="no_street<?php echo $i; ?>" id="no_street<?php echo $i; ?>" required> <br><br>

    <label for="type<?php echo $i; ?>">Type:</label> <br>
    <select name="type<?php echo $i; ?>" id="type<?php echo $i; ?>" required>
    <option value="" disabled selected>Choisir</option>
        <option value="livraison">Livraison</option>
        <option value="facturation">Facturation</option>
        <option value="domicile">Domicile</option>
        <option value="autre">Autres</option>
    </select> <br><br>

    <label for="city<?php echo $i; ?>">Province:City/Ville:</label> <br>
    <select name="city<?php echo $i; ?>" id="city<?php echo $i; ?>" required>
        <option value="" disabled selected>Choisir</option>
        <optgroup label = "Alberta">
            <option value="Brooks">Brooks</option>
            <option value="Edmonton">Edmonton</option>
            <option value="Saint Albert">Saint Albert</option>
        </optgroup>

        <optgroup label="British Columbia">
            <option value="Bakerville">Bakerville</option>
            <option value="Oak Bay">Oak Bay</option>
            <option value="West Vancouver">West Vancouver</option>
        </optgroup>

        <optgroup label="Manitoba">
            <option value="Churchill">Churchill</option>
            <option value="Thompson">Thompson</option>
        </optgroup>
        
        <optgroup label="New Brunswick">
            <option value="Caraquet">Caraquet</option>
            <option value="Saint John">Saint John</option>
        </optgroup>

        <optgroup label="Nova Scotia">
            <option value="Liverpool">Liverpool</option>
            <option value="Sydney">Sydney</option>
            <option value="Halifax">Halifax</option>
        </optgroup>

        <optgroup label="Ontario">
            <option value="Ottawa">Ottawa</option>
            <option value="Toronto">Toronto</option>
            <option value="Mississauga">Mississauga</option>
            <option value="Cambrigde">Cambrigde</option>
        </optgroup>
        
        <optgroup label="Quebec">
            <option value="Dorval">Dorval</option>
            <option value="Gatineau">Gatineau</option>
            <option value="Longueil">Longueil</option>
            <option value="Montreal">Montreal</option>
            <option value="Laval">Laval</option>
        </optgroup>
    </select> <br><br>

    <label for="zipcode<?php echo $i; ?>">Zipcode</label>
    <input type="text" name="zipcode<?php echo $i; ?>" id="zipcode<?php echo $i; ?>" required> <br><br>


        </fieldset>
    
<?php
        }
    } else {
        ?> <center><?php echo("Saisie invalide");?></center> <br> <br> <?php 
       ?> <center><?php echo("Veuillez appuyer sur retour pour saisir un chiffre valide"); ?></center> <br> <br> 
        <center><button type="button" onclick = "window.location.href = '../index.php';" class="confirm">Retour</button></center>
        <?php
        exit();
    }
    ?>
    
    <!--boutton confirmer --> 
        <button type="submit" class="confirmer">Confirmer</button>
    </form>
</body>
</html>