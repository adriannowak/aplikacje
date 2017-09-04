---
title: Typy danych (string, array, object, resource, null)
layout: post
---

Podręcznik str. 186 - 192

### Przykład na lekcji

```php
<?php
    $imie = 'Jaś'; // apostrofy
    $nazwisko = "Kowalski"; // cudzyslow
?>
```

```php
<?php
//heredoc
// uwaga, po DELIMITER NIE MA SPACJI!!!!
    $przywitanie = <<<DELIMITER 
    Czesc $imie $nazwisko. Jak sie masz?
    Co $imie jadłes dziś na sniadanie?
DELIMITER; // uwaga bez spacji i taba!!!
?>
```

```php
<?php
    // nowdoc
    // uwaga. PO DELIMITER NIE MOZE BYC SPACJI I KOMENTARZA
    $przywitanie2 =<<<'DELI' 
    Czesc $imie $nazwisko. Jak się masz?
    Co $imie jadłeś dziś na śniadanie?
DELI; // uwaga, bez spacji i taba!!!!
?>
```



---
### Tablice indeksowane


```php
<?php
    // dni tygodnia - bez tablic
    $dzien_tygodnia_1 = "Poniedzialek";
    $dzien_tygodnia_2 = "Wtorek";
    //[...]
    $dzien_tygodnia_5 = "Piątunio";
    //[...]
    $dzien_tygodnia_7 = "Niedziela";

    echo $dzien_tygodnia_2;
?>
```
---

```php
<?php
// tablice indeksowane. automatyczne przypisanie
    $dni_tygodnia = array(
        "poniedzialek",
         "wtorek", 
         /* .... */ "piątunio", 
         /* ... */ "niedziela"
    );

    echo $dzien_tygodnia[1]; // pierwszy element znajduje sie pod indeksem 0
?>
```
---

```php
<?php
    // tablice ideksowanie. reczne przypisanie
    $dni_tygodnia[0] = "Poniedzialek";
    $dni_tygodnia[1] = "Wtorek";
    // [...]
    $dni_tygodnia[4] = "Piątunio";
    // [...]
    $dni_tygodnia[6] = "Niedziela";

    echo $dni_tygodnia[1];
?>
```

---

```php
<?php

    // tablice idenksowanie. automatyczne przypisanie wersja alternatywna

    $dni_tygodnia[] = "Poniedzialek";
    $dni_tygodnia[] = "Wtorek";
    // ... itd

    echo $dni_tygodnia[1];
?>
```

---

### Tablice asocjacyjne

Przykład: `$_SERVER`


```php
<?php
    $tablica = array(
        klucz => wartosc,
        klucz2 => wartosc2,
    );
    
    echo $tablica['klucz'];
    
?>

```

---

### Przykład: Ksiązki w bibliotece.

#### Należy zwrocic uwage na typy danych. Cena i liczba stron to `INTEGER` i `FLOAT` !!!

```php
<?php
    $ksiazka = array(
        'tytul' => 'Akademia Pana Kleksa',
        'autor' => 'Jan Brzechwa',
        'stron' => 200,
        'cena' => 40.99
    );
    
    echo $ksiazka['cena'];
?>

```
---

#### A gdy mamy więcej ksiązek?

```php
<?php

    $ksiazka = array(
        'tytul' => 'Akademia Pana Kleksa',
        'autor' => 'Jan Brzechwa',
        'stron' => 200,
        'cena' => 40.99
    );
    $ksiazka2 = array(
        'tytul' => 'Samochwała',
        'autor' => 'Jan Brzechwa',
        'stron' => 12,
        'cena' => 12.99
    );

    $ksiazka3 = array(
        'tytul' => 'Na wyspach bergamutach',
        'autor' => 'Jan Brzechwa',
        'stron' => 10,
        'cena' => 12.99
    );
```

![RLY](http://i1.kym-cdn.com/entries/icons/original/000/000/015/orly.jpg)

```php
<?php

    $ksiazki = array(
        array(
                'tytul' => 'Akademia Pana Kleksa',
                'autor' => 'Jan Brzechwa',
                'stron' => 200,
                'cena' => 40.99
            ),
        array(
                'tytul' => 'Samochwała',
                'autor' => 'Jan Brzechwa',
                'stron' => 12,
                'cena' => 12.99
            ),
        array(
                'tytul' => 'Na wyspach bergamutach',
                'autor' => 'Jan Brzechwa',
                'stron' => 10,
                'cena' => 12.99
          )
    );

    // i wyswietlamy cene ksiazki "Na wyspach Bergamutach"
    echo $ksiazi[2][cena];
?>
```

---

### A gdyby tak nazwać ksiązki?


```php
<?php

    $ksiazki = array(
        "Akademia_Pana_Kleksa" => array(
                'tytul' => 'Akademia Pana Kleksa',
                'autor' => 'Jan Brzechwa',
                'stron' => 200,
                'cena' => 40.99
            ),
        "Samochwala" => array(
                'tytul' => 'Samochwała',
                'autor' => 'Jan Brzechwa',
                'stron' => 12,
                'cena' => 12.99
            ),
        "Na_Wyspach_Bergamutach" => array(
                'tytul' => 'Na wyspach bergamutach',
                'autor' => 'Jan Brzechwa',
                'stron' => 10,
                'cena' => 12.99
          )
    );

    // i wyswietlamy cene ksiazki "Na wyspach Bergamutach"
    echo $ksiazki["Na_Wyspach_Bergamutach"]['cena'];
    
?>
```


### Jak wyświetlić zawartość w postaci podstawowych elementów HTML, listy, tabele, bloki?

## Pomysl 1

```php
<?php
    $html = << HEREDOC;
    <ul>
        <li>$ksiazka1_tytul</li>
        <li>$ksiazki2_tytul</li>
        <li>$ksiazka_3_tytul
            <ol>
               <li>Cena $ksiazka_2_cena</li>
             </ol>
        </li>
    </ul>
   HEREDOC;
    echo $html;
```

## Pomysl 2
```php
<?php
    echo "<li>";
    echo "<li>";
    echo $ksiazka[0]['tytul']
    echo "</li>";
    echo "<ol><li>";
    echo $ksiazka[0]['cena'];
    echo "</li></ol>";
?>
```


## Pomysl 3

```php
<?php
    $ksiazki = array(); // tutaj lista ksiazek
?> <!-- zamykamy interpretacje php -->
   <ol>
        <li><?echo $ksiazki[0]['tytul']?></li> <!-- uruchamiamy interpreter na malym fragmencie -->
        <li><? echo $ksiazki[1]['tytul']?></li>
   </ol>
?>
```

### Zadanie na lekcji

Przygotuj tablice w której umieścisz 3 ksiązki:
 - tytul ksiązki
 - cene
 - adres url do miniatury
 - hiperłące do tytułu w księgarni internetowej
 - liczbę stron
 
 
Wyświetl dane w postaci:
 - funkcji `print_r` np. `print_r($ksiazki);`
 - tytuly ksiazek w postaci listy
 - tabele (cena ksiazki, tytul, autor, hiperlacze do ksiegarni internetowej)
 - listy numerowanej z zagniezdżeniami (wszystkie atrybuty)
 
 
### Zadanie domowe

termin: następna lekcja
osoby nieobecne: poinformowane na librus, następna lekcja po powrocie

Technika: `CSS` (zewnętrzny plik)
Po najechaniu na element powinien zmienic sie kolor obramowania z białego na szary.


![Foto](/images/zadania-php/typy-danych-2a.png)

[11,12,10,9,6,5]


![Foto](/images/zadania-php/typy-danych-2b.png)

[3,4,8,2,7,1]
