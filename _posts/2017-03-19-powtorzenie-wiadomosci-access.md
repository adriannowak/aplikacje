---
title: Powtórzenie wiadomości - Access
layout: post
---

Podręcznik str.  30 - 112

### Informacje

Jak dodać automatycznie otwierania formularza?

* [przy uzyciu makra](https://support.office.com/pl-pl/article/Tworzenie-makra-uruchamianego-podczas-otwierania-bazy-danych-98ba1508-dcc6-4e0f-9698-a4755e548124)
* [przy uzyciu opcji menu](https://support.office.com/pl-pl/article/Ustawianie-domy%C5%9Blnego-formularza-kt%C3%B3ry-pojawia-si%C4%99-przy-ka%C5%BCdym-otwarciu-bazy-danych-94961011-392f-4c3b-8dbc-e5d5adbff1df)
* [przy uzyciu opcji menu2](https://support.office.com/pl-pl/article/Ustawianie-domy%C5%9Blnego-formularza-kt%C3%B3ry-pojawia-si%C4%99-przy-ka%C5%BCdym-otwarciu-bazy-danych-lub-aplikacji-sieci-Web-d3c703a4-9aa6-4de4-b749-2dffb5b50596)


### Pytania

1. Jakie cechy powinno posiadać pole tabeli pełniące rolę klucza podstawowego?
2. Jaki typ pola najlepiej wybrać do wpisania numeru telefonu? Uzasadnij
3. Kiedy powinien być stosowany typ pola __Liczba, pojedyncza precyzja__?
4. W jakim celu ustawiane są właściwości pola?
5. Wymień warunki niezbędne do poprawnego zaprojektowania relacji pomiędzy tabelami
6. Jaką rolę w bazie danych spełniają więzy integralności
7. W jakim celu stosuje się indeksowanie pól tabeli?
8. Czym jest występujący w wyrażeniu identyfikator?
9. Jak w wyrażeniu zapisywane są wartości typu data, liczba, tekst?
10. Wymień operatory specjalne występując w programie Access
11. Jaką rolę w bazie danych spełniają kwerendy wybierające
12. Czym różni się działanie połączenia zawężającego od połączenia rozszerzającego?
13. Jakie działania mogą być realizowane za pomocą kwerend funkcjonalnych?
14. Jaką rolę pełnią formularze?
15. Opisz symbole i podaj przykłady maski wprowadzania
16. Zapisz maskę wprowadzania: NIP, PESEL
17. Do czego służą reguły poprawności danych? Podaj przykład reguły poprawności
18. Co to jest formant kombi? Podaj możliwe zastosowania
19. Co to jest raport? Czym rozni sie od formularza?
20. W jaki spsob zabezieczyc baze danych? Co to jest centrum zaufania?
21. Jak ustawic i usunac haslo w bazie danych?




### Zadanie

Wykonaj bazę danych zgodnie ze [schematem](/materialy-access/sprawdzian/schemat.PNG).

1. Dodaj przychodnie:
 - ID 1 "Kangur", ul. Zielona 12
 - ID 2 "Bóbr" ul. Góralska 4
 - ID 3 "Leopard" ul.Jesionowa 55
 
2. Dodaj lekarzy:
 - Damian Sowa, przychodnia id 1
 - Jan Kowalski, przychodnia 2
 - Tomasz Kowalski przychodnia 3
 - Piotr Nowak przychodnia 1
 - Pawel Kowalik przychodnia 1
 
3. Zaimportuj z pliku [XLS](/materialy-access/sprawdzian/pacjent.xlsx) informacje o pacjentach

4. Wykonaj formularz:
 - Dodaj/Usuń przychodnie
 - Dodaj/Usuń lekarza
 - Dodaj wizytę. Pole combi z pacjentem. Powinny wyswietlic sie informacje (TYLKO DO OCZYTU) o: lekarzu, przychodni
 
Formularz powinien posiadać przyciski:
 - "Powróc do głównego menu"
 
5. Dodaj kwerendę z parametrem dodająca nowego lekarza.

6. Dodaj kwerendę wyświetlającą liczbę pacjentów przypisanych do lekarza.

7. Na podstawie kwerendy z zadania 6 przygotuj raport.

8. Zabezpiecz bazę danych hasłem

9. Dodaj menu nawigacyjne z przyciskami uruchamiające się automatycznie po otworzeniu bazy danych.
Przykład [menu](/materialy-access/sprawdzian/menu.PNG)


10. Kwerenda aktualizująca adres przychodni z "Zielona 12" na Zielona "22" - dla przychodni "Kangur"

11. Kwerenda wykonujaca kopie tabeli pacjenci.

