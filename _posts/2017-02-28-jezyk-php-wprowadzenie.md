---
title: PHP - T1. Wprowadzenie.
layout: post
date: 2017/02/18
---

Podręcznik str. 169 - 179


### Przykład na lekcji

Aby zabezpieczyć hasłem katalog należy utworzyć plik zawierajacy login i hasla

```txt
C:\xampp\apache\bin\htpasswd.exe -c -b C:\xampp\secret\hidden\place\.htpasswd user password

```


Nastepnie tworzymy konfiguracje w pliku `.htaccess`

```txt
AuthName "Protected Area"
AuthType Basic
AuthUserFile C:/xampp/katalog/.htpasswd
require valid-user
```


### Uwaga
Domyslnie w systemie windows pliki tekstowe maja rozszerzenie `.txt`. Jak sobie poradzić z tym problemem? Odpowiedz znajdziecie tutaj - 
[tutorial](http://chandanpatra.blogspot.com/2013/08/basic-authentication-with-htpasswd-in.html)


### Zadanie domowe


- termin: następna lekcja
- osoby nieobecne: poinformowane o zadaniu via librus, pierwsza lekcja po powrocie do szkoły

Zainstaluj oprogramowanie XAMPP. 
1. Zabezpiecz dostęp haslem do katalogu `/prywatny`.
2. Dodaj uzytkownika admin (haslo:test123)
3. Wykonaj skrypt: 
    a) jako polecenie linii komend 
    b) przez przeglądarkę internetową
4. Zapoznaj się z poleceniem `htpasswd.exe`. Wybierz 3 opcje i je opisz.
5. Upewnij się, że uruchomiona jest obsługa błędów oraz `short_open_tag`.


Szablon odpowiedzi [odpowiedzi](/pozostale/szablon-zadanie-domowe-t1-php.doc). 



- Skrypt dla [1,3,6]

```php
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
```

- Skrypt dla [2,4,5]

```php
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php print_r($_SERVER); ?> 
 </body>
</html>
```

- Skrypt dla [7,8,9]

```php
<html>
<body>

<?php
print "<h2>PHP is Fun!</h2>";
print_r($GLOBALS);
?>
</body>
</html>
```

- Skrypt dla [10,11,12]

```php
<?php
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(10,100));
?>
```
