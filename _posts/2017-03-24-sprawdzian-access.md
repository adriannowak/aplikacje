---
title: Sprawdzian - access
layout: post
---

Sprawdzian został podzielony na dwa etapy.
Pierwszy z nich piszemy na kartce. 

W lewym gornym rogu: imie, nazwsko i klasa. Prawy górny róg - dzisiejsza data. 

Drugi etap - praktyczny. 

Maksymalna liczba punktów: __12 pkt__
- ndst (0-5.5)
- dop (5.5 - 6)
- dst (7 - 8.5)
- db (9 - 10.5)
- bdb (10.5 - ) 


### Pytania (6 pkt) 

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
22. Podaj rozszerzenie pliku Access
23. Jaki symbol ma operator arytmetyczny modulo?
24. W jakim celu tworzy sie formularze do obslugi bazy danych?
25. Jak nazywa się element za pomocą którego możemy odczytywać dane z bazy danych prezentując je w postaci tekstu lub wykresu?



### Zadanie praktyczne (6pkt)


1 Wykonaj bazę danych zgodnie ze [schematem](/materialy-access/sprawdzian/schemat.PNG) (1 pkt).

Pamiętaj o zachowaniu typów danych oraz relacjach!!!

2 Dodaj przychodnie (0.5 pkt):
 - ID 1 "Kangur", ul. Zielona 12
 - ID 2 "Bóbr" ul. Góralska 4
 - ID 3 "Leopard" ul.Jesionowa 55
 
Dodaj lekarzy:
 - Damian Sowa, przychodnia id 1
 - Jan Kowalski, przychodnia 2
 - Tomasz Kowalski przychodnia 3
 - Piotr Nowak przychodnia 1
 - Pawel Kowalik przychodnia 1

 
3 Dodaj formularze. W kazdym z nich wstaw datę w nagłówku oraz tytuł (1 pkt):
 - dodanie oraz usunięcie przychodni
 - dodanie oraz usunięcie lekarza

W formularzu dodajacym lekarza użyj pola typu kombi do okreslenia przychodni. 
Pamiętaj o zablokowaniu mozliwości edycji i wstawiania w odpowiednich miejscach!!
Przyciski umiesc w stopce !!!

4 Dodaj kwerende:
  - Grupa A "Liczba lekarzy zatrudnionych w przygodniach" o nazwie "Liczba lekarzy w przychodniach" (0.5pkt).
  - Grupa B "Wykonaj kopie zapasowa tabeli lekarze" o nazwie "Wykonaj backup tabeli" (0.5pkt)
  - Grupa A kwerendę aktualizującą lekarzy o nazwisku "Kowalski" -> ":wartosc_z_parametru" (0.5 pkt)
  - Grupa B kwerende usuwającą zawartosc tabeli backup (0.5 pkt)
  
5 Wyświetl raport zawierający informacje o lekarzach zatrudnionych w przychodniach (1pkt)

6 Dodaj menu nawigacyjne z przyciskami uruchamiające się automatycznie po otworzeniu bazy danych (pkt 1)
Przykład [menu](/materialy-access/sprawdzian/menu.PNG)

7 Zabezpiecz bazę danych hasłem "test" (0.5 pkt)
