---
title: JAVASCRIPT
layout: post
---


### Materiały
 - [dokumentacja MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference)
 - [dokumentacja speakingjs](http://speakingjs.com/es5/index.html)
 - [kurs JS](http://shebang.pl/kursy/wszystko-jasne/)


# T1: Struktura i składnia języka JavaScript

[Wirtualna tablica](https://realtimeboard.com/app/embed/o9J_k0O00kM=/?)

 - JS w HTML, document.write, console.log
 - Instrukcje i wyrażenia
 - Składnia (komentarze, średniki, nazwy zmiennych)
 - Rodzaje zmiennych (typy prymitywne/skalarne, obiekty/złożone typy danych, tablice i obiekty, null, undefined)
 - Typ zmiennej, rodzaj obiektu
 - Operatory (arytmetyczne, porownania, bitowe, logiczne)


<script src="https://gist.github.com/adriannowak/850fcfd940686ba1fdab741756a45881.js"> </script>

Zadanie:

Stworz dwa pliki: index.html oraz skrypt.js
W skrypt.js zadeklaruj dwie zmienne: A = 15 oraz B = 4

1. Wyswietl typ zmiennej (wykorzystujac typeof) A oraz B w postaci:
 "Typ zmiennej A = 15 to number"
 "Typ zmiennej B = 4 to number"

2. Wykonaj dzialania wykorzystujac:
 - operatory arytmetyczne
 - operatory bitowe
Wyswietl na ekran wynik w postaci:
 "15 + 4 = 19"
 "15 - 4 = 15"
 
 Przyklad:
 '''javascript
    var a = 15;
    var b = 4;
    
    document.write(a);
    document.write(" + ");
    document.write(b);
    document.write(" = ");
    document.write(a+b);
    
 '''
# T2: Skalarne typy danych - Typ liczbowy [Number](http://speakingjs.com/es5/ch11.html)
 - zapis dziesiętny, wykładniczy, ósemkowy i szesnastkowy (042, 10, 0x lub 0X, 1E-10)
 - konwersja dowolnej wartosci na liczbe (Number, +value, parseFloat)
 - standard IEE754 (konwersja dec -> bin, ulamki, EPSILON, 2^-53)
 - specjalne wartosci (NaN, Infinity, +0, -0)
 - isFinite, isNegativeZero, isPositiveZero
 - błędy zaokrągleń, jak powstają, 0.1 + 0.2 = ?
 - konwersja do liczb calkowitych (Math.floor, Math.ceil, Math.round)
 - parseInt(val, radix - podstawa)
 - Number.MAX_VALUE, Number.MIN_VALUE
 
 
 Metody Number:
  - toFixed
  - toString(radix)
  
 Metody Math:
  - pow
  - sqrt
  - sin, cos, tan
  - min, max
  - random [0,1)
  
  Przykad: Number(1234.2).toFixed(0), Number(10.0).toString(2)
  
Zadanie:
 - dokonaj porównania metod transformacji dowolnej zmiennej na liczbę, a wynik wypisz w konsoli:
   - Pusty napis ''
   - Wartość null
   - 1234,00
   - 1234.00
   - _spacja_12345
   - 123#abc

Przykład: +'', Number(''), parseFloat('')

Zadanie (zeszyt) :
   - oblicz binarną wartość: 100, 0.25 oraz 11.25 wykorzystująć standard IEE757 (poj. precyzji)
   - [jak obliczać?](https://www.matematyka.pl/181848.htm#p5162809)
   - [dec -> bin](http://www-users.mat.umk.pl/~zssz/nsi2009/konw.pdf)

Zadanie:
 - sprawdz jakiego typu jest wartosc NaN wpisujac w konsoli
   typeof NaN

Zadanie:
 - zamien na postac binarna liczbe 12345, 333212, 0.5

Zadanie:
 - zadeklaruj zmienna var celciusz = "20"
 - sprawdz typ zmiennej
 - zamien string -> number
 - wykonaj zamiane stopni celciusza na Farenheita (32+ 9/5 * T)

<script src="https://gist.github.com/adriannowak/7f386ef83e1a569421382f691d33776a.js"></script>
// https://www.nettecode.com/zadanie-3-ozyw-swoja-strone-javascript/
 
# T3: Typ [Boolean](http://speakingjs.com/es5/ch10.html)
 - 3 metody Boolean(wartosc), value ? true : false, !!value
 - Operatory logiczne (wartosc domyslna)
 - Operatory bitowe
 

# T4: Typ [Napisowy](http://speakingjs.com/es5/ch12.html)
  - 3 metody String(value), ''+value, value.toString()
  - dzielenie dlugiego tekstu
  - specjalne znaki \t \b \n
  - łączenie tekstów
  - length
  - charAt, []
  - substring, slice,
  - split
  - trim
  - toUpperCase
  - toLowerCase
  - indexOf
  - replace

Zadanie:
 - Utworz zmienna var zdanie1 = "ala me KOTA"
 - Podziel tekst (funkcja split) na wyrazy
 - Z pierwszego wyrazu przy uzyciu funkcji toUpperCase zamien ala -> Ala
 - W drugim wyrazie popraw literke e na a
 - W trzecim wyrazie zamien KOTA -> kota
 - Calosc zapisz do zmiennej zdanie2
 

# T5: [Tablice](http://speakingjs.com/es5/ch18.html):
 - deklarowanie tablic var arr = [1,2,3]
 - pobieranie elementu [n]
 - length
 - push
 - pop
 - shift
 - unshift
 - delete
 - join
 - sort
 - some
 - every
 - reduce
 
 Iterowanie po elementach tablicy
 [1,2,3].forEach(function(e) -> {console.log(e})
 [1,2,3].map(function(e) -> {String(e).toUpperCase()})

 
 
 Zadanie:
  - Utworz tablice z imionami
  - Posortuj imiona alfabetycznie
  - Usun ostatni element
  - Dodaj na poczatek imie 'Tomek'
  - Zamien tablice na tekst, imiona laczac przecinkiem
  
 
 
 
# T6: [Obiekty](http://speakingjs.com/es5/ch08.html#object_values)
 - window
 - navigator
 - document
 - location
 - history


# T7 