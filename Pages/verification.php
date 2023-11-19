<!-- Page de verification -->
<?php
session_start();

require_once('../Configuration/connexion.php');
require_once('../functions/valider.php');
require_once("../functions/addressCrud.php");

 $_POST["Nbr_addresse"] = $_SESSION["Nbr_addresse"];
 
var_dump($_SESSION["Nbr_addresse"]);

$nbr = isset($_POST["Nbr_addresse"]) ? intval($_POST["Nbr_addresse"]) : 0;
var_dump($nbr);


$_SESSION['Nbr_addresse'] = $nbr;


for ($i = 1; $i <= $nbr; $i++) {
    if (isset($_POST["no_street$i"], $_POST["street$i"], $_POST["city$i"], $_POST["zipcode$i"], $_POST["type$i"])) {
        $_SESSION["no_street$i"] = $_POST["no_street$i"];
        $_SESSION["street$i"] = $_POST["street$i"];
        $_SESSION["city$i"] = $_POST["city$i"];
        $_SESSION["zipcode$i"] = $_POST["zipcode$i"];
        $_SESSION["type$i"] = $_POST["type$i"];

        $streetIsValid=validateStreet($_POST["street$i"]);
        $zipCodeIsValid =validateZipcode($_POST["zipcode$i"]);
        

        if ($streetIsValid["isValid"] && $zipCodeIsValid["isValid"]) {
            echo"<h2>ADRESSE $i </h2>";
             echo "street$i :".$_POST["street$i"];
             echo"<br><br>";
             echo "no_street$i :".$_POST["no_street$i"];
             echo"<br><br>";
             echo "type$i :".$_POST["type$i"];
             echo"<br><br>";
             echo "city$i :".$_POST["city$i"];
             echo"<br><br>";
             echo "zipcode$i :".$_POST["zipcode$i"];
             echo"<br><br>";
            }else{
                echo" <h1><center>ADRESSE $i PAS VALIDE</h1></center><br><BR>";
                echo "Verifier votre ville(min 50 caracteres) et votre code postal(min 6 caracteres, ex:H1W1G2)";
            }
    } else {
        echo "Donnes manquantes";
        if (empty($_POST["no_street$i"])) echo "No Street, ";
        if (empty($_POST["street$i"])) echo "Street, ";
        if (empty($_POST["city$i"])) echo "City, ";
        if (empty($_POST["zipcode$i"])) echo "Zipcode, ";
        if (empty($_POST["type$i"])) echo "Type, ";
    }
};
if (isset($streetIsValid["isValid"]) && ($zipCodeIsValid["isValid"])) {
    //demander a l'utilisateur de verifier ses adresses
echo "<h2>Veuillez confirmer si vos informations sont corrects ou annuler dans le cas contraire</h2>";
?>
<form action="../functions/addressCrud.php" method = "post">
<button type="submit" name ="approuver" class="but">Confirmer</button>
</form>
<form action="" method="post">
<button type="button" onclick = "window.history.back();" class="annuler">Annuler</button> 
</form>
<?php
;}
?>


