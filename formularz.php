<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$pol = mysqli_connect("localhost", "root", "root");
if($pol == false) {
    mysqli_error($pol);
    die();
}

$czy_zmieniona = mysqli_select_db($pol, "ezn");

if($czy_zmieniona == false) {
    mysqli_error($pol);
    die();
}


$zap1 = mysqli_query($pol, "SELECT * FROM users");

if($zap1 == false) {
    mysqli_error($pol);
    die();
}


while(($tmp = mysqli_fetch_array($zap1)) != null) {
    print_r($tmp);
}



mysqli_close($pol);
?>

