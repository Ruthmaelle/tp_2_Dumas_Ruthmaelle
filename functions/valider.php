<?php
//page de validation des champs d'adresses

//street ne doit pas etre superieur a 50 caracteres
function validateStreet($street) {
    $length = strlen($street);
    $valeur = is_string($street);
    $responses =[
        'isValid' => true,
        'msg' => ''
    ];
    if ($length >=51){
        $responses=[
            'isValid' => false,
            'msg' => 'Street trop long'
        ];
    } elseif ($length<=2) {
        $responses= [
            'isValid' =>false,
            'msg' => 'Street trop court'
        ];
    }
    return $responses;
}

function validateZipcode($zipcode) {
    $length = strlen($zipcode);
    $responses =[
        'isValid' => true,
        'msg' => ''
    ];
    if ($length >= 7){
        $responses=[
            'isValid' => false,
            'msg' => 'Zipcode trop long'
        ];
    } elseif ($length<6) {
        $responses= [
            'isValid' =>false,
            'msg' => 'Zipcode trop court'
        ];
    }
   return $responses;
}

?>
