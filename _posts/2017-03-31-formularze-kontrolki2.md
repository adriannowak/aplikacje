---
title: Formularze - obsługa podstawowych kontrolek (2/3)
layout: post
---


Przydatne funkcje:
    - strtotime http://php.net/manual/en/function.strtotime.php
    - date parse http://php.net/manual/en/function.date-parse.php
    - date_parse_from_format http://php.net/manual/en/function.date-parse-from-format.php
    
    
    
 
### Przykład na lekcji


```php
<?php
    $wynik = strtotime('06-04-2017 +3days');
    print_r(getdate($wynik));
?>

```
```php
<!DOCTYPE html>
<html>
    <head>
        <title>Formularz logowania</title>
        <meta charset="utf-8">
        <style>
            .main {
                width:80%;
                border:2px solid red;
                margin:auto auto;
                padding:20px;
            }
            label {
                padding: 10px;
                display:block;
                overflow:auto;
            }
            label input {
                float: right;
            }
            
            .center {
                display:block;
                margin: auto auto;
            }
            
        </style>
    </head>

    <body>
        <div class="main">

<form method="GET" action="#">
                <label>
                Wpisz swój login
                    <input placeholder="Login" type="text" name="login"/>
                </label>
                <label>
                    Wpisz swoje hasło
                    <input placeholder="Haslo" type="password" name="haslo"/>
                </label>
                <label>
                    Wybierz ulubiony kolor
                    <input type="color" name="kolor"/>
                </label>
                <select name="wyksztalcenie">
                    <option>Brak</option>
                    <option>Podstawowe</option>
                    <option>Średnie</option>
                    <option>Wyższe</option>
                </select>
                
                <input class=center type="submit" value="Zaloguj się"/>
            </form>        
    </div>

    </body>
```

### Zadanie dla 3E

Dodaj przyciski typu checkbox - 'Znam angielski', "Znam niemiecki", "Znam czeski".
W wyniku zapisania formularza powinna wyswietlic sie flaga zaznaczonych panstw.

Dane przechowaj w postaci tablicy. 



### Zadanie domowe


Przygotuj skrypt, który po kliknięciu w wybrane miasto wyświetli informacje o nim wraz z herbem.
Dane przechowaj w postaci tablicy.

Podpowiedź: należy przerobić funkcję wyświetl_informacje();


```php
<!DOCTYPE html>
<html>
    <head>
        <title>Formularz logowania</title>
        <meta charset="utf-8">
        <style>
            .main {
                width:80%;
                border:2px solid red;
                margin:auto auto;
                padding:20px;
            }
            
            .center {
                display:block;
                margin: auto auto;
            }
            
        </style>
    </head>

    <body>
        <div class="main">
        <h2>Wybierz miasto i naciśnij wyszukaj</h2>
            <form method="GET" action="#">
                <select size=1 name="miasto">
                    <?php
                        echo wyswietl_option_z_miastem();
                    ?>
                </select>
                <input type=submit value="Wyszukaj"/>
            </form>        
    </div>
        <?php
            if(isset($_GET['miasto'])) {
                wyswietl_informacje();
            }
        ?>
    <?php
        function wyswietl_option_z_miastem() {

            $miasta = ["Wrocław", "Wałbrzych","Legnica","Jelenia Góra", "Lubin", "Głogów", "Świdnica","Bolesławiec","Oleśnica","Dzierżoniów"];
            sort($miasta);
            foreach($miasta as $miasto) {
                $wynik = "<option>$miasto</option>";
                echo $wynik;
            }
        
        }
        
        function wyswietl_informacje() {
        $miasto = $_GET['miasto'];
        echo '<div class="main" style="margin-top:20px">';
        echo '<h3>Miasto '.$miasto.'</h3>';
        echo '<div>Info + herb</div>';
        echo '</div>';
        }

    ?>
    
    

    </body>
```
    
    

