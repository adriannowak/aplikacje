---
title: Komentarze, zmienne, zmienne predefiniowane, typy danych (bool, int, float)
layout: post
---

Podręcznik str. 180 - 188.


### Przykład na lekcji

```php
<!doctype html>
<html>
    <head>
        <title>
            <?php 
                // komentarz 1-linijkowy
                # unixowy
                /*
                    blokowy
                */
                echo "Tytul wygenerowany w PHP"; 
            ?>
        </title>
     </head>
     <body>
            <h1>Zawartość strony<h1>
     </body>
</html>
```

### Zmienne 

```php
<?php
    echo "Treść"; // wyświetlenie tekstu
    echo("Treść");
    $zmienna = "Treść"; // deklaracja i inicjalizacja zmiennej
    echo $zmienna; // wyświetlenie
    
    print_r($_SERVER); // wyświetlenie 
    echo ($_SERVER['HTTP_USER_AGENT']);
    var_dump($_SERVER);
?>
```

### Typy danych

```php
<?php
    // zmienna typu bool
    $czy_pelnoletni = true;
    
    //zmienna typy int
    $wiek = 18;
    
    $a = 10;
    $b = 20;
    $pole_prostokata = ($a * $b);
    echo "Prostokat o boku a=";
    echo $a;
    echo " i boku b=";
    echo $b;
    echo " ma pole=";
    echo $pole_prostokata;
    
    //zmienna typu float
    
    $pi = 3.14;
    echo $pi;
?>
```

### Zadanie domowe

- termin: następna lekcja
- osoby nieobecne: poinformowane o zadaniu via librus, pierwsza lekcja po powrocie do szkoły


1 Utwórz stronę WWW `strona.php` wykorzystaj CSS do pozycjonowania elementów.

- w kodzie zastosuj komentarze przy deklaracji zmiennych
- w tytule dokumentu umieść IP serwera. 

Zmienne:
 - $adresIP - `$_SERVER['REMOTE_ADDR']`
 - $przegladarka - `$_SERVER['HTTP_USER_AGENT']`
 - $server - `$_SERVER['SERVER_NAME']`
 
 

---

 ![obrazek](/images/zadania-php/typy-danych-1a.png) 
 
 [1,2,3,4,5,6]
 
 ---
 
 ![obrazek](/images/zadania-php/typy-danych-1b.png) 
 
 [7,8,9,10,11,12]
 
 ---
 
 2 Odpowiedz na pytania na podstawie [dokumentacji](http://php.net/manual/en/reserved.variables.php)
 - do czego służą zmienne `$argv` i `$argc`
 - wymień i opisz zmienne przechowywane w `$_SERVER` (minimum 8)
 - opisz instrukcje `echo` i `print_r`. Podaj przykłady.

 
 Rozwiązania w postaci kodu strony + css (w archiwum zip) oraz [szablonu odpowiedzi](/pozostale/szablon-zadanie-domowe-typy-danych-t1-php.doc)
 