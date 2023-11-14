<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresse</title>
</head>
<body>
    <form action="./verification.php" method="post">
    <label for="street">Street/Rue:</label> <br>
    <input type="text" name="street" id="street" required> <br><br>

    <label for="no_street">No street/No Rue:</label> <br>
    <input type="number" name="no_street" id="no_street" required> <br><br>

    <label for="type">Type:</label> <br>
    <select name="type" id="type" required>
    <option value="" disabled selected>Choisir</option>
        <option value="livraison">Livraison</option>
        <option value="facturation">Facturation</option>
        <option value="domicile">Domicile</option>
        <option value="autre">Autres</option>
    </select> <br><br>

    <label for="city">Province:City/Ville:</label> <br>
    <select name="city" id="city" required>
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

    <label for="zipcode">Zipcode</label>
    <input type="text" name="zipcode" id="zipcode" required> <br><br>

    <input type="submit" value="Confirmer">

    </form>
</body>
</html>