<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- link to css -->
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
    <form action="" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom"> <br>
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom"> <br>
    <label for="Nbr_addresse">Combien d'adresse avez vous</label>
    <input type="number" name="Nbr_addresse" id="Nbr_addresse" required><br><br>
    <input type="submit" value="Confirmer">
    </form>
</body>
</html>