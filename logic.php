<?php

function aktualizuj_haslo($login, $haslo) {
    $haslo_zakodowanie = zakoduj_haslo($haslo);
    return "UPDATE uzytkownik SET haslo = '${haslo_zakodowanie}' WHERE login = '${login}'";
}

function dodaj_uzytkownika($login, $haslo) {
    $haslo_zakodowane = zakoduj_haslo($haslo);
    return "INSERT INTO uzytkownik(login, haslo) VALUES ('${login}', '${haslo_zakodowane}')";
}


function zakoduj_haslo($haslo) {
    return md5($haslo);
}


?>