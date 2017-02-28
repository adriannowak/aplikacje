---
title: Powtórzenie wiadomości - SQL
layout: post
---
Zebrane notatki z lekcji oraz wymagania

---

### Materiały

Materiały [online](http://aplikacje.vector.org.pl/materialy-sql/) lub [tutaj](https://sites.google.com/view/irolniknysa/e-14-2/kurs-sql) plus ksiązka E.14

### Zagadnienia


1. Wybrane funkcje i operatory jezyka SQL
- podstawowe operatory (+,-, %, ...)
- funkcje operujace na liczbach (abs, pi, rand, ....)
- funkcje operujace na tekstach (lower, upper, repeat, length, ..., password, md5)
- funkcje daty i czasu

2. Funkcje grupowania danych
3. Zmienne i instrukcje sterujace
4. Funkcje uzytkownika
5. Funkcje skladowane
6. Wyzwalacze
7. Transakcje
8. Blokowanie tabel
9. Poziomy izolowania transakcji
10. Indeksy
11. Widoki
12. Zarzadzanie uzytkownikami



### Zadania na powtórzenie wiadomości

1. Wyświet imiona i nazwiska rodziców w jednym polu o nazwie `Imię i nazwisko`. 
2. Wyświetl wynik działań: `(5*2+3^2)/(-5^2-3^2)`, `1/2(5*4)`. Wynik podaj w formacie walutowym.
3. Wyświetl ile procent pełnoletności (bez części ułamkowej) i z częscią ułamkową uzyskali uczniowie (17 lat = 94%, 18 = 100%)
4. Wyknaj symulację 100 rzutów kostką. Wynik zapisz w tabeli rzut_kostką.
5. Której funkcji należy użyć, żeby zaokrąglić liczbę 2.8 do 2?
6. Jakich funkcji należy użyć, żeby zamienić w zadanym tekście wybrane słowo na inne?
7. Wyświetl pierwszych i ostatnich 6 znaków zaszyfrowanej postaci haseł użytkowników z tabeli użytkowników systemowych bazy danych
8. Jak wyznaczyć różnicę pomiędzy dwoma datami?
9. Do czego służą funkcje agregujące?
10. Jak wyświetlić skrajne wartości w danej kolumnie?
11. Wyświetl różnicę pomiędzy najmniejszym i największym stypendium dla ucznia. (tabela uczen, kolumna kwota_stypendium)
12. Wyświetl datę urodzenia najmłodszego i najstarszego ucznia.
13. Jak wyświetlić liczbę rekordów w tabeli? Jak wyświetlić liczbę unikalnych rekordów w tabeli?
14. Napisz funkcję obliczającą pole trójkąta. 
15. Do czego służą procedury składowane?
16. Po co i w jaki sposób blokuje się tabele?
17. Na czym polega zakleszczenie tabel i kiedy do niego dochodzi?
18. Kiedy warto utworzyć indeks tabeli, a kiedy nie zaleca się utworzyć indeksu tabeli?
19. W jaki sposób można przetestować indeks tabeli? Do czego służy polecenie „EXPLAIN”?
20. Czym jest widok (perspektywa) w języku SQL?
21. Jakie są zasady modyfikowania danych poprzez widoki?
22. Jak zmodyfikować bądź usunąć użytkownika w języku SQL?
23. W jaki sposób przydziela się i odbiera użytkownikom prawa dostępu?
24. Jakie cechy powinna mieć każda transakcja?
25. W jaki sposób można anulować fragment transakcji?

### Notatki

#### Funkcje

Instrukcje sterujace

```
SHOW FUNCTION STATUS LIKE '%nazwa_funkcji%';
SHOW FUNCTION STATUS WHERE '%nazwa_funkcji%';


1. 
CREATE FUNCTION 
        nazwa_funkcji(parametry) 
RETURNS 
        typ_wyniku 
RETURN 
        wyrazenie;

2. 
DELIMITER ##
CREATE FUNCTION nazwa_funkcji(nazwa_parametru typ_parametru, ...)
RETURNS
        typ_wyniku
BEGIN
        RETURN wynik;
END ##
DELIMITER ;

----------------------------
(wersja wielolinijkowa)

1. Zmienne lokalne
W bloku BEGIN mozemy stworzyc "kontenery" na dane - zmienne.

        DECLARE zmienna TYP_zmiennej;

Aby przypisac wartosc do zmiennej 

        SET zmienna = wartosc

Aby wyswietlic zmienna:

        SELECT zmienna;

Aby zapisac wartosc zmiennej, pobranej z polecenia:
        SELECT IMIE INTO zmienna FROM pracownik;


2. Instrukcje warunkowe
        IF warunek THEN wynik;
        ELSEIF warunek2 THEN wynik2;
        ELSE wynik3;
        END IF;


        IF plec='M' THEN RETURN 'Szanowny Pan';
                ELSEIF plec='K' THEN RETURN 'Szanowana Pani';
                ELSE RETURN 'Szanowni Panstwo';
        END IF;


RIGHT(imie,1) = 'a' <-> warunek, K czy M

Przyklad 1

DELIMITER ##
CREATE FUNCTION 
        zwrot_grzecznosciowy(imie TEXT) 
RETURNS 
        text
BEGIN
        DECLARE pani TEXT;
        DECLARE pan TEXT;
        SET pani = 'Szanowna Pani';
        SET pan = 'Szanowny Pan';
        
        IF RIGHT(imie,1) = 'a' THEN RETURN pani;
        ELSEIF imie IS NULL THEN RETURN 'Nie da sie okreslic';
        ELSE RETURN pan;
        END IF;
END ##
DELIMITER ;



2. Instrukcja case
Gdy badamy konkretna zmienna pod wzgledem parametru najwygodniej jest uzyc instrukcji case.


        CASE wartosc_sprawdzana
                WHEN wartosc1 THEN instrukcje;
                WHEN wartosc2 THEN instrukcje2;
                ELSE instrukcja domyslna;
        END CASE;


Przyklad2
DROP FUNCTION zwrot_grzecznosciowy;
DELIMITER ##
CREATE FUNCTION 
        zwrot_grzecznosciowy(imie TEXT) 
RETURNS 
        text
BEGIN
        DECLARE pani TEXT;
        DECLARE pan TEXT;
        DECLARE ost_lit TEXT;

        SET pani = 'Szanowna Pani';
        SET pan = 'Szanowny Pan';
        SET ost_lit = RIGHT(imie,1);        
        
        CASE ost_lit 
                WHEN 'a' THEN RETURN pani;
                WHEN NULL THEN RETURN 'Nieokreslony';
                ELSE RETURN pan;
        END CASE;

END ##


-------------------
Drugi sposob na instrukcje CASE

        CASE
                WHEN warunek
                        THEN instrukcje;
                WHEN warunek2
                        THEN instrukcje;
                ELSE instrukcje_domyslne;
        END CASE;

Przyklad3

DROP FUNCTION zwrot_grzecznosciowy;
DELIMITER ##
CREATE FUNCTION 
        zwrot_grzecznosciowy(imie TEXT) 
RETURNS 
        text
BEGIN
        DECLARE pani TEXT;
        DECLARE pan TEXT;
        DECLARE ost_lit TEXT;

        SET pani = 'Szanowna Pani';
        SET pan = 'Szanowny Pan';
        SET ost_lit = RIGHT(imie,1);        
        
        CASE
                WHEN ost_lit = 'a' THEN RETURN pani;
                WHEN ost_lit IS NULL THEN RETURN 'Nieokreslony';
                ELSE RETURN pan;
        END CASE;

END ##
DELIMITER ;


        WHEN data = 1 THEN RETURN 'Niedziela';
        
        DELIMITER ##
        CREATE FUNCTION dzien_tyg(data date) 
        RETURNS 
        text
        begin
        declare dzien int;
  set dzien = DAYOFWEEK(CURRENT_DATE());

     return dzien;
END ##
DELIMITER ;
        
        delimiter##
CREATE FUNCTION dzien_tyg(data date)
returns text
begin 
declare pDzien text;
set  pDzien = 'text';
return dzien;
end ##
delimiter ;
```


Funkcje operujace na tekscie
```txt
1. UPPER(kolumna) - konwersja małych -> wielkie
2. LOWER(kolumna) - konwersja na małe
3. CONCAT(kolumna1, kolumna2, ...) - łączenie tekstów
4. CONCAT_WS(separator, kolumna1, kolumna2, ...)
5. LENGTH(kolumna) - liczba znaków 
6. REPEAT(tekst, n) - powtarza tekst N razy
7. REVERSE(kolumna) - odwraca tekst
8. TRIM(kolumna), RTRIM(kolumna), LTRIM(kolumna) - usuwa biale znaki
z tekstu, RTRIM (na koncu), LTRIM (na poczatku)
9. CONV(liczba, z_podstawy, do_podstawy) - konwersja liczby
10. HEX, OCT, BIN


11. REPLACE(tekst, podciag, podciag2) - zamienia podciag na podciag2 w tekscie
12. SUBSTRING(tekst, pozycja, liczba_znakow)
UWAGA: pozycja 1 - pierwsza litera, -1 ostatnia litera


13. LEFT(tekst, liczba znakow) - podciag od 1 do N
14. RIGHT(tekst, liczba znakow) - podciag od 1 do N (od konca)

FUNKCJE LICZBOWE:
    
    - ABS(liczba) - wartosc bezwzgledna
    - FORMAT(liczba, dokladnosc) - formatuje liczbe do postaci #,###
    - RAND - losuje z przedzialu [0,1)
    - CEIL przybliza liczbe "w gore"
    - FLOOR - przybliza liczbe "w dol"
    - TRUNCATE(liczba, dokladnosc) =- obcina liczby do miejsca o podanej dokladnosci
    - ROUND(liczba, dokladnosc) - przybliza do liczby calkowitej o podanej dokladnosci
    
    - ~ negacja bitowa
    - & - AND
    - | - OR
    - ^ - XOR]
    - >> przesuniecie bitowe
    - << przesuniecie bitowe

15. PASSWORD(tekst), MD5(tekst), SHA(tekst), SHA2(tekst, liczba znakow)
```

Funkcje operujace na dacie

```
interval - 
INTERVAL (LICZBA) JEDNOSTKA
 - SECOND
 - MINUTE
 - HOUR
 - DAY
 - WEEK
 - MONTH
 - YEAR
ADDDATE(date, days/interval)
ADDTIME(date, 'HH:MM:SS')

DATEDIFF(date,date/interval) - liczba dni
TIMEDIFF('12:00:00','11:00:00')
EXTRACT ('INTERVAL UNIT'  FROM NOW());

Zadanie 1
Dzisiaj jest NOW(). Ktory to jest tydzien w tym miesiacu?
Zadanie 2
Oblicz, ile dni temu sie urodziles.
Zadanie 3
Dzisiaj jest '2016-05-01'. Ktory to jest tydzien w roku?

1.
SELECT FLOOR(EXTRACT(DAY FROM NOW())/7);

2.
SELECT DATEDIFF(NOW(), '1998-11-30');
3.
SELECT FLOOR(DATEDIFF('2016-05-01','2015-12-31') / 7);


--------
DATE
TIME
SELECT DATE(NOW()), TIME(NOW())); odpowiednik
SELECT CURRENT_TIME(), CURRENT_DATE();

UNIX_TIMESTAMP(data) -> ilosc sekund od 1970-01-01

FROM_UNIXTIME(liczba_sekund_od_1970)


4. Bazujac na informacjach z timestamp
 - Ile sekund zyjesz? SELECT UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP('1998-11-30');
 - Ile godzin zyjesz? SELECT (UNIX_TIMESTAMP(NOW()) - UNIX_TIMESTAMP('1998-11-30')) / 3600 ;
 - Ile minut trwaja juz zajecia z aplikacji?bardzo długo :c select unix_timestamp('2016-12-21 08:50:00')
  select unix_timestamp(now())-unix_timestamp('2016-12-21 08:50:00');


MAKETIME
MAKEDATE

BENCHMARK(n,(POLECENIE));
CONNECTION_ID()
LAST_INSERT_ID()



DATE_FORMAT(date,format)


%a - dzien tygodnia
%b - miesiac
%d - dzien 00-31
%D - 0-31
SELECT DATE_FORMAT(NOW(),'%a');
SELECT DATE_FORMAT(ADDDATE(NOW(), INTERVAL 180 DAY),'%a');
SELECT DATE_FORMAT(ADDDATE('2016-01-01', INTERVAL 180 DAY),'%a');

```

Triggery

```
1. Wyzwalacz (trigger) to specjalna procedura zwiazana z okreslonymi zdarzeniami:
    - INSERT
    - UPDATE
    - DELETE
    
Wyzwalacza nie mozna uruchamiac samodzielnie - taka procedura jest automatycznie uruchamiana przez SZBD.

INSERT - zwiazana ze wstawieniem do tabeli nowych wierszy
UPDATE - aktualizowanie ISTNIEJACYCH REKORDOW
DELETE - usuniecie rekordu


Zdarzenie moze zostac wywolane :
    - PRZED (BEFORE)
    - PO (AFTER)
    
    
2. Jak dodac triggera?

DELIMITER ##

CREATE TRIGGER nazwa_wyzwalacza [czas_zdarzenia] [zdarzenie] ON [tabela] FOR EACH ROW
BEGIN
instrukcje....;
END ##
DELIMITER ;

3. Usuniecie triggera
DROP TrIGGER nazwa_triggera

4. Wyswietlenie wyzwalaczy
SHOW TRIGGERS


5. Wewnatrz TRIGGERA mamy dostep do 2 zmiennych predefiniowanych
NEW
OLD



Przyklad. 

Dodajemy TRIGGER - AFTER INSERT. Zadaniem triggera jest modyfikacja NEW.data_wpr 

DELIMITER ##
CREATE TRIGGER add_data_wpr BEFORE INSERT ON pracownik FOR EACH ROW
BEGIN
IF NEW.imie = 'Adam' THEN
SET NEW.imie = 'XXXXXXXX';
END IF;
SET NEW.data_wpr = CURRENT_DATE;
END ##
DELIMITER ;



Zadanie 1
Dodaj tabele pracownik (id,imie, nazwisko, data_mod)
Wykonaj triggera : BEFORE UPDATE aktualizujacego date_mod

```

Indeksy

```
1. Jak dodac indeks?

CREATE TABLE nazwa_tabeli(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    imie TEXT,
    nazwisko TEXT,
    login TEXT UNIQUE,
    INDEX(imie),
    INDEX(imie, nazwisko),
    INDEX(nazwisko)
    );

CREATE INDEX nazwa_indeksu ON tabela(kolumna);
CREATE INDEX nazwa_indeksu2 ON tabela(kolumna1, kolumna2);

2. Jak wyswietlic informacje o indeksach?

SHOW INDEX FROM tabela  ;

Przyklad 1

CREATE INDEX idx_pracownik_imie ON pracownik(imie);




3. Polecenie EXPLAIN

Sluzy do badania, ktore indeksy warto tworzyc

Przyklad
mysql> EXPLAIN SELECT * FROM pracownik where imie like '%adam%';
+----+-------------+-----------+------------+------+---------------+------+---------+------+-------+----------+-------------+
| id | select_type | table     | partitions | type | possible_keys | key  | key_len | ref  | rows  | filtered | Extra       |
+----+-------------+-----------+------------+------+---------------+------+---------+------+-------+----------+-------------+
|  1 | SIMPLE      | pracownik | NULL       | ALL  | NULL          | NULL | NULL    | NULL | 30190 |    11.11 | Using where |
+----+-------------+-----------+------------+------+---------------+------+---------+------+-------+----------+-------------+
1 row in set, 1 warning (0,00 sec)

4. Profilowanie bazy (sprawdzanie, jak dlugo wykonuje sie polecenie)

Krok 1. Uruchomienie profilera

SET profiling = 1;
     (polecenia)
SHOW PROFILES; <- wyswietlenie wynikow



Zadanie 1

Dodaj tabele pracownik (id, imie, nazwisko)
Dodaj 100000 wpisow

Sprawdz czasy wykonania dla zapytan
SELECT * FROM pracownik where id IN (1,2,3,4,5,6);
SELECT * FROM pracownik where imie like '%adam';
SELECT * FROM pracownik where UPPER(nazwisko) like 'kowalski%';

Dodaj indeks na kolumnie imie
Sprawdz ponownie czasy wykonania



Jak dodac wiele wpisow do tabeli?
1. uzupelnij 10 pierwszych wpisow
2. insert into pracownik(imie,nazwisko) select imie,nazwisko from pracownik;
```


Transakcje

```
1`Akcja lub seria akcji przeprowadzanych przez pojedynczego uzytkownika lub aplikacje w celu uzyskania dostepu do SZBD zwiazanego z odczytem lub modyfikacja zawarosci bazy danych nazywana jest transakcja.

Wymiana danych moze byc narazona na utrate spojnosci. Stan bazy danych okresla sie jako spojny, gdy jej zawartosc odpowiada rzeczywistosci, a wprzechowywanych danych nie pojawiaja sie bledy. 

Aby baza danych nie stracila spojnosci, wprowadzanie i modyfikacja danych powinny zachodzic w sposob gwarantyjacy poprawnosc przechowywanych informacji.

Skonczony proces wymiany danych pomiedzy BD a uzytkownikiem nazywamy transakcja. 

Poprawnie wykonana tx powinna miec 5 podstawowych cech:
    
    - niepodzielna
    - spojna
    - wspolbiezna
    - izolowana
    - trwala

Transakcje sa wykonywane calosciowo jako jedna operacja, albo wcale (w przypadku bledu)
Idea - przelew bankowy.




Polecenia
 - BEGIN - rozpoczecie transakcji
 - ROLLBACK - wycofanie transakcji
 - COMMIT - zatwierdzenie
 



II Punkty zachowania
Zakladki z nazwa - pozwalaja cofnac fragment transakcji. Aby utworzyc punkt zachowania w tx:
    
    SAVEPOINT nazwa;
    
    W celu przywrocenia transakcji do punktu zachowania stosujemy polecenie
    ROLLBACK TO SAVEPOINT nazwa;
    
    Przyklad:




mysql> BEGIN;
Query OK, 0 rows affected (0,00 sec)

mysql> update pracownik set wiek = 100;
Query OK, 10 rows affected (0,00 sec)
Rows matched: 10  Changed: 10  Warnings: 0

mysql> savepoint a;
Query OK, 0 rows affected (0,00 sec)

mysql> update pracownik set wiek = 10;
Query OK, 10 rows affected (0,01 sec)
Rows matched: 10  Changed: 10  Warnings: 0

mysql> rollback to savepoint a;
Query OK, 0 rows affected (0,00 sec)



 
 ZADANIE DOMOWE
 Utworz tabele symulujace konto bankowe. Utworz transakcje przelewajaca pieniadze z jednego konta na inne.
 
 3 przelewy (w 2 roznych oknach)



```

Widoki


```
Perspektywa nazywana jest rowniez widokiem.
Jest to niezmaterializowana tabela, ktorej zawartosc jest zazwyczaj pobierana i wyliczaba przez system z kilku tabel zrodlowych.

Istotna cecha perspektywy jest to, ze tworzona jest wirtualnie, co oznacza, ze nie jest zapisywana na dysku.

Istnieja przypadki, gdy w celu polepszenia wydajnosci decydujemy sie na zmaterializowanie perspektywy (czyli zapisanie jej na dysku) - mowimy wowczas o perspektywie zmaterializowanej.


Widok definiowany bywa rowniez jako zapytanie, ktora na podstawie danych z kilku tabel tworzy wirtualna tabele.


Podczas opisywania widokow nalezy rowniez zwrocic uwage na kwestie bezpieczenstwa.
Widoki umozliwiaja ukrycie przed uzytkownikiem informacji, do ktorych nie powinien miec dostepu.

1. Jak stworzyc widok?
 - okreslamy dane zrodlowe (czyli np. polecenie sql z join)
 SELECT * FROM samochod s LEFT JOIN pracownik p ON (p.id = s.pracownik_id);
 - wybieramy nazwe (czesto z prefixem v)
 - wykonujemy polecenie 
   CREATE VIEW nazwa_widoku AS dane_zrodlowe
CREATE VIEW vImieNazwiskoMarka AS SELECT imie,nazwisko,marka FROM samochod s JOIN pracownik p ON (p.id = s.pracownik_id);

Od tego momentu mozemy wykonywac operacje np. SELECT na nowej tabeli

2. Jak usunac widok?
 - DROP VIEW nazwa_widoku

3. Jak poznac jaki jest typ tabeli (zwykla, czy widok?)
 - SHOW FULL TABLES
 
 
 II. Widok zmaterializowany
 W MySQL nie istnieje. Mozemy wykorzystac polecenie 
 CREATE TABLE nazwa_tabeli AS (...) w celu uzyskania podobnej funkcjonalnosci.
 
 
 CREATE TABLE vPracownikSamochod AS SELECT * FROM samochod s LEFT JOIN pracownik p ON (p.id = s.pracownik_id);


Mozemy przesledzic jego dzialanie na przykladzie bazy danych PostgreSQ

create materialized view vPracownikMat as select * from pracownik where id IN (3,4);

anowak=# select * from vPracownik;                                                          
id | imie  | nazwisko
----+-------+-----------
  3 | Piotr | Nowak
  4 | Piotr | Marciniak
(2 rows)

Aby odswiezyc widok zmaterializowany z PSQL : refesh materialized view vPracownikMat;

Zadanie:
    1. Stworz baze danych hotelu.
    2. Encje - pokoj, rezerwacja, klient
    3. Dodaj pokoje: P1, P2, P3, P4
    4. Zarezerwuj pokoje P1, P3 na dzis
    5. Dodaj widok:
        - wolne pokoje dzis
        - zarezerwowane pokoje na dzis z nazwiskiem klienta
    6. Wykonaj kopie zapasowa tabeli z rezerwacja (widok zmaterializowany)
```

Zarządzanie użytkownikami

```
1. Uzytkownicy
SZBD MySQL umozliwia zroznicowanie dostepu do bazy danych na poziomie uzytkownikow.

Nazwa uzytkownika sklada sie z 
 - loginu
 -  @
 - adresu IP/host
 
 np. 
 1. 'anowak'@'81.15.206.250' -> dodaje uzytkownika anowak z mozliwoscia zalogowania sie z hosta 81.15.206.250
 2. 'anowak'@'%' -> dodaje uzytkownika anowak z mozliwoscia logowania sie z dowolnego hosta
 3. 'anowak'@'81.15.206.0/255.255.255.0'
 
 Jak sprawdzic na ktorego uzytkownika jkestesmy zalogowani?
 
 mysql> SELECT CURRENT_USER();
+----------------+
| CURRENT_USER() |
+----------------+
| root@localhost |
+----------------+
1 row in set (0,00 sec)

mysql>

1. Jak wyswietlic dostepnych uzytkownikow w MySQL?
SELECT * FROM mysql.user;

2. Jak dodac uzytkownika?
CREATE USER nazwa_uzytkownika IDENTIFIED BY [PASSWORD] 'haslo';

3. Zmiana nazwy uzytkownika
RENAME USER nazwa_uzytkownika TO inna_nazwa_uzytkownika;

4. Ustawienie hasla uzytkownika
SET PASSWORD for nazwa_uzytkownika = PASSWORD('haslo');

5. Usunięcie użytkownika
DROP USER nazwa_uzytkownika;

-------
- SELECT
- INSERT
- UPDATE
- DELETE
- CREATE TABLE|VIEW|FUNCTION|PROCEDURE
- ALTER TABLE|VIEW
- USAGE - brak uprawnien
- ALL PRIVILEGES - wszystkie uprawnienia
- EXECUTE - wykonanie, np. funkcji


Prawo do tworzenia funkcji uzytkownika:
    create routine
    

-------

II. Uprawnienia/dostęp do tabel mozemy kontrolowac na poziomie uzytkownikow za pomoca instrukcji

1. Wyswietlenie praw dostepu
SHOW GRANTS FOR uzytkownik;

2. Przydzielenie uzytkownikowi praw dostepu do tabel
GRANT prawa_dostepu ON tabela TO uzytkownicy [WITH GRANT OPTION]

Przyklad:
    GRANT SELECT ON baza1.* TO 'ro'@'%';
    
3. Odbieranie praw do tabel
  REVOKE prawa_dostepu ON tabela FROM uzytkownik;
  
  
  REVOKE ALL ON *.* FROM 'uczen'@'localhost';
  DROP USER 'uczen'@'localhost';
  
  
  


1. Dodaj uzytkownika 'szkola_ro' (haslo 1234)
2. Nadaj mu uprawienia do oczytu bazy danych 'szkola'
3. Dodaj uzytkownika 'nazwa_rw' i nadaj mu uprawnienia do zapisu bazy danych szkola (haslo 4321 w postaci zaszyfrowanej)
4. Zablokuj uzytkownika (doczytac o poleceniu ALTER USER)
5. Ustaw wygasniecie hasla za 7 dni

6. Dodaj tabele uczen (imie, nazwisko, klasa, srednia ocen)
7. Dodaj widok agregujacy srednia ocen w podziale na klasy. Dodaj 
uzytkownikowi 'statystyka' uprawienia do widoku.


Sprawdz jak zmienily sie dane w tabeli mysql.user
```