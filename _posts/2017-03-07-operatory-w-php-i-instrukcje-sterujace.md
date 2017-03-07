---
title: Operatory w języku PHP i instrukcje sterujące
layout: post
---

Podręcznik str. 193 - 205


### Wyświetlenie przekazanej wartości

Url: http://localhost/plik.php?zmienna=wartosc&zmienna2=wartosc

```php
<?php
    echo $_GET['zmienna'];
    echo $_GET['zmienna2'];
?>
```


### Stałe

* `TRUE`
* `FALSE`
* `PHP_VERSION`
* `PHP_OS`

[Link do dokumentacji](http://php.net/manual/en/reserved.constants.php)

### Stałe magiczne

* `__FILE__` (dwie podłogi FILE dwie podłogi)
* `__LINE__`
* `__DIR__`


[Link do dokumentacji](http://php.net/manual/en/language.constants.predefined.php)


### Zadanie na lekcji

Zdefiniuj w kodzie i wyświetl: 
 - stałą AUTHOR - wpisując jako wartość swoje dane
 - nazwę pliku ze zmiennej magicznej
 - numer linii w kodzie
 - nazwę katalogu
 - zmienną przekazaną poprzez parametr URL - `login=adres@email.com`
 
 
----
 
### Przyklad pętli FOR
---

```
    <h2 style="background-color:red">Cześć Przybyszu!</h2>
    <h2 style="background-color:green">Cześć Przybyszu!</h2>
    <h2 style="background-color:blue">Cześć Przybyszu!</h2>

```

--- 

```php
<?php

<?php
    $ile_razy = $_GET['ile_razy'];
    $kolory = array("red","green","blue");
    for($i = 0;$i<$ile_razy;$i++) {
        echo '<h2 style="background-color:'.$kolory[$i%3].'">Cześć Przybyszu!</h2>';
    }
```


### Przykład pętli WHILE

```php
<?php 
    $ile_razy = 10;
    while($ile_razy>0) {
        echo "Witaj przybyszu";
        $ile_razy--;
    }
?>
```

### Przykład pętli DO WHILE

```php
<?php
$ile_razy = 10;
do {
    echo "Witaj przybyszu";
    $ile_razy = $ile_razy - 1;
} while($ile_razy >0);

?>
```

 
 
### Zadanie domowe 1

termin zadania: następna lekcja
osoby nieobecne: poinformowane na librus, następna lekcja po powrocie


Wykorzystując tablicę 

```php
    $komentarze = array();
    // indeks 0 - imie i nazwisko
    // indeks 1 - tresc komentarza
    // indeks 2 - data dodania
    // indeks 3 - czy użytkownik jest zweryfikowany
    // indeks 4 - kolor czcionki
    
    $komentarze[] = array("Adam Nowak","Ekstra skrypt!","2016-01-01", true, "RED");
    $komentarze[] = array("Piotr Kowalski","Dobry pomysł!","2016-02-01", false, "GREEN");
    $komentarze[] = array("Anna Paprzycka","Masz suba!","2016-03-01", true, "BLUE");
    $komentarze[] = array("Urszula Kowalska","Chcemy więcej!","2016-04-01", true, "#FFAAFF");
    

```
 
Wyświetl za pomocą pętli bloki zawierające komentarze w kolorach.
Uwaga: Imie i nazwisko oraz data dodania to POLA FORMULARZA !!! INPUT !!!

 * for [1,2,3] [10,11,12]
 * while [4,5,6] [7,8.9]
 * do while [7,8,9] [4,5,6]
 * foreach [10,11,12] [1,2,3]
 

Jeśli użytkownik jest zweryfikowany to ustawiamy dodatkowo ikone "OK".
Ostatni parametr oznacza kolor bloku komentarza.


Aby pobrać liczbę elementów w tablicy nalezy użyć konstrukcji

```php
<?php
    $liczba_elementow = count($komentarze);
?>
```

![Obraz](/images/zadania-php/petle.png)


### Zadanie domowe 2

termin zadania: następna lekcja
osoby nieobecne: poinformowane na librus, następna lekcja po powrocie

Zaimplementuj algorytm w języku PHP.
Zastosuj komentarze w kodzie (tak jak na załączonym przykładzie)


* Wartosc bezwzględna [1,2]
* Suma liczb a,b [3,4]
* Srednia arytmetyczna liczb a,b,c,d [7,8]
* NWD dla liczb [9,11]
* Liczba jest nieparzysta [12,6]
* Potęgowanie [10,5]



Zadania domowe proszę przygotować wykorzystując [szablon](/pozostale/szablon-instrukcje-i-petle-php.doc)

### Przykład

Szukanie elementu maksymalnego w tablicy

```php
<?php

    // deklaracja tablicy
    $tablca = array(10,9,4,5,1,11,20);
    
    // pobieramy pierwszy element
    $max = $tablica[0];
    
    // sprawdzamy wszystkie elementy
    for($i = 1;$i<count($tablica);$i++) {
    
        // jesli jest wieksza wartosc, to zastepujemy zmienna $max
        if($tablica[$i] > $max) {
            $max = $tablica[$i];
        }
    }
    
    $wynik = <<<DEL
    Największy element tablicy to $max
DEL;

echo $wynik;

```