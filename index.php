<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- link to css -->
    <link rel="stylesheet" href="./styles/style.css"/>
</head>
<body > <!-- Works! --> 
    <center><p>Bienvenue sur notre site</p></center>
    <center><p>Veuillez saisir les informations demandé</p></center> <br> <br>
    <form action="./Pages/address.php" method="post"> 
    <center> <label for="Nbr_addresse">Combien d'adresse avez vous</label> <br></center> <br>
    <center><input type="text" name="Nbr_addresse" id="Nbr_addresse" required><br><br></center> 
    <center><input type="submit" value="Confirmer" class="button" width="50px"></center>
    </form>
</body>
</html>