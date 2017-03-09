---
title: Tworzenie funkcji w PHP
layout: post
---

Podręcznik str. 207 - 215


### Przykład funkcji
 * `void phpinfo()`;
 * `integer count($tablica)`
 * `void sort()`
 * `integer rand($a,$b)`
 
### Definiowanie funkcji

```php
 <?php 
    function nazwa_funkcji($argument) {
    
    }
    
    // wywolanie funkcji
    nazwa_funkcji("argument");    
 ?>
 
```
 
### Zwracanie wartości przez funkcje
 
 - przykład: znajdz najmniejszy element
 
```php
 <?php
    function($tablica) {
        $max = $tablica[0];
        foreach($tablica as $element) {
            if($element > $max) {
                $max = $element;
            }
            // lub szybciej
            $max = ($element > $max) ? $element : $max;
        }
        return $max;
    }
 ?>
 
```
 
 
 - przyklad 2
 
```php
 <?php
 
    function srednia_liczb($tablica_liczb = array()) {
        $suma = 0;
        foreach($tablica_liczb as $element) {
            $suma +=$element;
        }
        return $suma / count($tablica_liczb);
        
    }
    
    echo srednia_liczb(array(1,2,3,4,5,10));
 ?>
 
```
 
 
 - przyklad 3
 
```php
 <?php
    functon suma_liczb($a = 0, $b = 0) {
        return $a+$b;
    }
    
    suma_liczb($_GET['a'],$_GET['b']);
    
 ?>
    
```

### Zadanie domowe

termin: następna lekcja
osoby nieobecne: poinformowane na librus, następna lekcja po powrocie


Napisz funkcję, która:
 - zwróci sumę dwóch liczb 
 - zwróci wartość bezwzględną liczby 
 ```php
 <?php
    function wartosc_bezwzgledna($liczba) {
    
    
    }
 ```
 
 - zwróci potęge liczb
 ```php
 <?php
    function potega($podstawa, $wykladnik) {
    
    }
 ```
 - wyświetli tabelę z towarami. do wyświetlenia wiersza uzyj funkcji. parametrem powinna byc tablica
 ![obraz](/images/zadania-php/funkcje-php.png)
 
 
Szablon [odpowiedzi](/pozostale/szablon-zadanie-domowe-funkcje-php.doc)
 
### Przekazywanie argumentów przez wartość


```php
<?php
    function dodaj_do_liczby($liczba,$ile_dodac) {
        echo "W funkcji przed dodaniem".$liczba;
        $liczba+=$ile_dodac;
        echo "W funkcji po dodaniu: ".$liczba;
        return $liczba;
    }
    
    
    $zmienna = 10;
    $wynik = dodaj_do_liczby($zmienna,2);
    echo $wynik;
?>
```

### Argumenty przekazywane za pomocą referencji

```php
<?php
    function dodaj_do_liczby(&$liczba,$ile_dodac) {
        echo "W funkcji przed dodaniem".$liczba;
        $liczba+=$ile_dodac;
        echo "W funkcji po dodaniu: ".$liczba;
        return $liczba;
    }
    
    
    $zmienna = 10;
    $wynik = dodaj_do_liczby($zmienna,2);
    echo $wynik;
?>
```

### Domyślne argumenty funkcji


```php
<?php
    function dodaj_do_liczby($liczba,$ile_dodac = 1) {
        echo "W funkcji przed dodaniem".$liczba;
        $liczba+=$ile_dodac;
        echo "W funkcji po dodaniu: ".$liczba;
        return $liczba;
    }
    
    
    $zmienna = 10;
    $wynik = dodaj_do_liczby($zmienna);
    echo $wynik;
?>
```


DO DOKONCZENIA
---


### Zmienna lokalna


### Zmienna statyczna


### Zmienna globalna


### Zadanie domowe 2

![](/images/zadania-php/cytaty.jpg)