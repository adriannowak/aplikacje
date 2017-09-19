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
[Materiały dodatkowe](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators)

 - JS w HTML, document.write, console.log
 - Instrukcje i wyrażenia
 - Składnia (komentarze, średniki, nazwy zmiennych)
 - Rodzaje zmiennych (typy prymitywne/skalarne, obiekty/złożone typy danych, tablice i obiekty, null, undefined)
 - Typ zmiennej, rodzaj obiektu
 - Operatory (arytmetyczne, porownania, bitowe, logiczne)

[KOD JS](https://gist.github.com/adriannowak/850fcfd940686ba1fdab741756a45881#file-javascript-js)

Zadanie:

Stworz dwa pliki: index.html oraz skrypt.js
W skrypt.js zadeklaruj dwie zmienne: A = 15 oraz B = 4

1. Wyswietl typ zmiennej (wykorzystujac typeof) A oraz B w postaci:
 - "Typ zmiennej A to number"
 - "Typ zmiennej B to number"

2. Wykonaj dzialania wykorzystujac. Wyswietl na ekran wynik w postaci dzialania:
 - operatory arytmetyczne
 - operatory bitowe
 
 Przykladowy wynik na stronie:
 - "15 + 4 = 19"
 - "15 - 4 = 15"
 
 Przyklad:
 
 ```javascript
    var a = 15;
    var b = 4;
    
    document.write(a);
    document.write(" + ");
    document.write(b);
    document.write(" = ");
    document.write(a+b);
    
```



Zadanie:

Podaj wartość zmiennej A w kolejnych krokach programu.

```javascript
    var a = 1;
    console.log(a);
    a++;
    console.log(a);
    console.log(a++)
    a = a << 2
    console.log(a);
    a *= 2;
    console.log(a);
l;.
```

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
 - dokonaj porównania metod transformacji zmiennej na liczbę, a wynik wypisz w konsoli:
   - Pusty napis ''
   - Wartość null
   - 1234,00
   - 1234.00
   - _spacja_12345
   - 123#abc

```
Dla pustego napisu : 
   + zwraca - wartosc XXX
   toNumber zwraca - wartosc XXX
   parseFloat- wartosc XXX
   
Dla wartosci null
   + zwraca - wartosc XXX
   toNumber zwraca - wartosc XXX
   parseFloat- wartosc XXX
```

```javascript
    var pustyNapis = "";
    console.log("Dla pustego napisu:");
    console.log( " + zwraca ")
    console.log(+pustyNapis);
    console.log(" toNumber zwraca ");
    console.log(Number(pustyNapis));
```

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
 - zadeklaruj zmienna var cel = "20"
 - sprawdz typ zmiennej
 - zamien string -> number
 - wykonaj zamiane stopni celsjusza na Farenheita (32+ 9/5 * T)
 - wykonaj obliczenia ponownie dla wartosci 21, wynik zaokraglij do 2 miejsc po przecinku
 
 
Zadanie:
 - Wprowadz zmienne:
   0b11101001, 0x0FF, 0888, 234
   
 - Oblicz minimum i maksimum. 
 - Wynik przedstaw w systemie 2, 8, 10 i 16
 
 ```
 Min: XXXXX, (BIN: XXXXX, OCT: XXXXX, DEC: XXXXX, HEX : XXXXX)
 Max: XXXXX, (BIN: XXXXX, OCT: XXXXX, DEC: XXXXX, HEX : XXXXX)
```


Zadanie: 

- Wyznacz wartosc pierwiastka kwadratowego z 30.


Zadanie:
 - Wylosuj 6 liczb z przedzialu 1 - 49
 - Wyswietl wynik
 
 
# T3: Typ [Boolean](http://speakingjs.com/es5/ch10.html)
 - 3 metody Boolean(wartosc), value ? true : false, !!value
 - Operatory logiczne (wartosc domyslna)
 - Operatory bitowe
 
 
Zadanie:
Podaj wartość wyrażenia:

```javascript
(false || true) && !(false && true)
```

```javascript
((4 >= 6) || ("zielona" != "trawa")) && !(((12 * 2) == 144) && false)
```

```javascript
Math.min(2, 4) + 100 < 0x22
```

# T4: Typ [Napisowy](http://speakingjs.com/es5/ch12.html)

[Materiały uzupełniające](https://www.w3schools.com/jsref/jsref_obj_string.asp)
[Tablica ASCII](https://stackoverflow.com/a/9539389)

  - 3 metody String(value), ''+value, value.toString()
  - dzielenie dlugiego tekstu
  - specjalne znaki \t \b \n \f \r \" \' \\
  - łączenie tekstów
  - length
  - charAt, []
  - charCodeAt
  - String.fromCharCode
  - substring, slice,
  - split
  - trim
  - toUpperCase
  - toLowerCase
  - indexOf
  - replace
  - search
  - match
  - fontcolor
  - fontsize

Zadanie:
 - Utworz zmienna var zdanie1 = "ala me KOTA"
 - Podziel tekst (funkcja split) na wyrazy
 - Z pierwszego wyrazu przy uzyciu funkcji toUpperCase zamien ala -> Ala
 - W drugim wyrazie popraw literke e na a
 - W trzecim wyrazie zamien KOTA -> kota
 - Calosc zapisz do zmiennej zdanie2

 
Zadanie:

W tekście "Elektroniczne Zakłady Naukowe, ul Braniborska 57, 50-123 Wrocław" przy użyciu metod String
wyszukaj kod pocztowy. 
 - podziel tekst np. wzgledem , lub spacji
 - wyszukaj odpowiedni fragment "50-123 Wroclaw"
 - ponowie podziel tekst wzgledem spacji
 

# T5: [Wyrażenia regularne]
[Materialy obowiązkowe](https://www.w3schools.com/jsref/jsref_obj_regexp.asp)
[Testowanie wyrazen](http://regexr.com/)

 - RegExp
 - `. $ ^ { [ ( | ) ] } * + ? \`
 - metody .exec oraz .test
 - tekst
 - `[test]`
 - `[^test]`
 - `[0-9]`, [a-zA-Z]
 - `(wt|so|nd)`
 - `\d \D` (digit)
 - `\s \S` (whitespace)
 - `\w \W` (word)
 - `.` 
 - `{n}`, {n,}, {n,m}
 - `?` {0,1}
 - `*` {0,}
 - `+` {1,}
 - `^n`, n$
 - `i` - ignore-case
 - `g` - global
 - `m` - multiline

Przykład: /test/i.test("TEST"), /(TAK|NIE)/i.test("TAK"), /[0-9]{2}-[0-9]{3}/.match("Wroclaw 12-222, Warszawa 44-333")

 
Zadanie:
Zadeklaruj zmienna haslo:
 - wprowadz do zmiennej dowolny ciag znakow
 - sprawdz czy zawiera 8 znakow
 - sprawdz czy haslo zawiera litere
 - sprawdz czy haslo zawiera cyfre
 - jesli haslo spelnia 3 kryteria - wyswietl napis "MOCNE HASLO" w kolorze zielonym
 - jesli haslo spelnia pierwsze oraz drugie lub trzecie - wyswietl napis "DOBRE HASLO"
 - w przeciwnym razie "SLABE HASLO" w kolorze czerwonym
 
 
Zadanie:
Napisz wyrazenie regularne sprawdzajace:
 - numer PESEL
 - identyfikator NIP (DDD-DD-DD-DD)
 - liczby binarne
 - liczby heksadecymalne
 
Zadanie:
Napisz wyrażenie regularne dopasowujące datę w formacie "XX/XX/XXXX". 
Wypróbuj je na łańcuchu "urodzeni 15/11/2003"



# T6: [Tablice](http://speakingjs.com/es5/ch18.html):
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
 - reverse
 
 Iterowanie po elementach tablicy
 [1,2,3].forEach(function(e) -> {console.log(e})
 [1,2,3].map(function(e) -> {String(e).toUpperCase()})

 
 
 Zadanie:
  - Utworz tablice z imionami
  - Posortuj imiona alfabetycznie
  - Usun ostatni element
  - Dodaj na poczatek tablicy imie 'Tomek'
  - Zamien tablice na tekst, imiona laczac przecinkiem
  
 Zadanie:
  - zadeklaruj tablice [1,2,3,"a","b","c"]
  - sprawdz czy zawiera cyfry (typeof lub regexp)
  - sprawdz czy zawiera litery
  - sprawdz czy zawiera kod pocztowy
  - sprawdz czy wszystkie elemeny sa literami
  
 Zadanie:
  - Utworz tablice, ktora bedzie zawierala liczby i tekst, np. 1,2, "adam","anna", "PIOTR" 
  - posortuj elementy:
   - najpierw tekst wielkimi literami
   - tekst malymi literami
   - cyfry
   
 Podpowiedz: sprawdzmy najpierw typ zmiennej 
  
 Zadanie:
 Zadeklaruj tablice wielowymiarowa (10 wierszy, 10 kolumn)
 Do tablicy wierszami wprowadz kolejne liczby 3 cyfrowe. `w0= 100, w1= 200,  w2= 300, ...`
  - Przy petli wyswietl dane zachowujac podzial na wiersze i kolumny.
  - Oblicz sume na obu przekatnych tablicy
  - Oblicz srednia na obu przekatnych tablicy
  
# T7: Instrukcje warunkowe, pętle
 - instrukcja if
 - ? :
 - for
 - while
 - do while
 - continue
 - break
 - switch

 
 
Zadanie:
Napisz aplikajce sluzaca do zmiany oceny w postaci liczby na ocene slowna.
Do pobrania oceny uzyj `window.prompt`. 
Dozwolone wartosci: od 1 do 5
Jesli wprowadzono bledny tekst lub liczbe wyswietl okno dialogowe ponownie.


Zadanie:
Napisz aplikacje sluzaca do dzielenia dwoch liczb. Do pobrania kazdej z nich zastosuj 
okno dialogowe `window.prompt`. Wyklucz mozliwosc dzielenia przez 0.


Zadanie:
Przy uzyciu kodu HTML napisz ogolny wzor rownania kwadratowego. Wykorzystaj znaczniki `sup` oraz `var`
Wczytaj przy uzyciu `window.prompt` trzy wartosci: A, B, C.
Wynikiem aplikacji powinna byc wartosc delty oraz wartosc pierwiastkow rownania.

W przypadku braku wyniku nalezy wyswietlic odpowiedni komunikat.

Zadanie:
Napisz apliacje, ktora wyswietli liczby parzyste od 0 do 100.

Zadanie:
Napisz aplikacje, ktora wyswietli liczby od 10 do 0.

Zadanie:
Napisz aplikacje, ktora wczyta liczby od uzytkownika do tablicy.
W przypadku podania 0 program konczy dzialanie i wyswietla wszystkie wprowadzone wartosci.

Zadanie:
Napisz aplikacje ktorej zadaniem jest rozwiazanie problemu wydawania reszty.
Problem ten polega na znalezieniu najmniej licznego zbioru monet o wartosci rownej wydawanej reszcie.

`var N = [200, 100, 50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01];`

W praktyce mamy reszty 305.20
 - idziemy od lewej strony po elementach tablicy
 - 305.20 / 200 - ? 1
 - 305.20 - 200 = 105.20
 - idziemy dalej, 105.20 / 100 ? 1
 - zostaje 5.20
 


# T8: [Obiekty](http://speakingjs.com/es5/ch08.html#object_values)
 - tworzenie wlasnych obiektow
 - [window](https://www.w3schools.com/jsref/met_win_open.asp)
   * prompt, alert, confirm
   * open
   * scrollX, scrollY, scrollTo(x,y)
   * screen, screenX, screenY
   * print
   * setInterval, setTimeout, clearInterval, clearTimeout
   * screen
 - history
   * back, go, length
 - document
   * title
   * lastModified
   * createElement, createTextNode, 
   * appendChild, insertBefore, removeChild, replaceChild
   * getElementById, querySelectorAll, getElementByClassName, getElementsByTagName
   * node, Element, Attribute
   * .attribute (src, href, ...)
   * .style (color, backgroundColor, ...)
   * .cookie
 - location
   * reload
   * host, 
 - navigator
 
 Zadanie:
 Otworz witryne internetowa http://ezn.edu.pl w nowym oknie. Odczekaj 10 sekund po czym zamknij okno.
 
 Zadanie:
 Otworz w nowym oknie witryne internetowa http://ezn.edu.pl.  Wysrodkuj element. Wykorzystaj `window.screen`.
 
