<?php
//page de validation des champs d'adresses

function validateStreet($street) {
    return is_string($street) && strlen($street) <= 50;
}

function validateZipcode($zipcode) {
    return strlen($zipcode) === 6;
}

?>
