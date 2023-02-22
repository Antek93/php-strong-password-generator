<?php

function length_selector($length) {
    if ($length == "00") {
        $newLength = 0;
    } else if ($length == "10") {
        $newLength = 10;
    } else if ($length == "20") {
        $newLength = 20;
    } else if ($length == "30") {
        $newLength = 30;
    } else if ($length == "40") {
        $newLength = 40;
    } else if ($length == "50") {
        $newLength = 50;
    } else if ($length == "70") {
        $newLength = 70;
    }

    return $newLength;
};


function generateRandomString($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"£$%&/()';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
};
