<?php
require_once("../Configuration/connexion.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createAddress(array $data) {
    global $conn;
    $query = "INSERT INTO address VALUES (NULL, ?, ?, ?, ?, ?)";
    echo "SQL Query working: $query\n";
   if($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "sss", $data['street'], $data['street_nb'], $data['type'], $data['city'], $data['zipcode']);
        $results = mysqli_stmt_execute($stmt);
        echo "Execution Result: ".($results ? "Success" : "Failure") . "\n";
        echo "<br>";
        echo "<center><em>Adresse ajouter avec succes </em></center>";
        echo"<h1>Merci</h1>";
        var_dump($results);
        return $results; 
   }
};

?>