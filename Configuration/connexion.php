<?php
$server = "localhost";
$userName = "root";
$pwd = "";
$db = "ecom1_tp2";

//pour se connecter avec la base de donnee
$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "connected to the $db database succesfully";
    global $conn; 
} else {
    echo "Error: Not connected to the $db database";
}
?>
