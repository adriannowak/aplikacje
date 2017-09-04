---
title: Powtórzenie wiadomości - SQL
layout: post
---
Zebrane notatki z lekcji oraz wymagania

---

### Materiały

Materiały [online](http://aplikacje.vector.org.pl/materialy-sql/)  + podręcznik E.14

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




