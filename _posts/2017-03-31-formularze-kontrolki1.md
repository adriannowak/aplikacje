---
title: Formularze - obsługa podstawowych kontrolek (1/3)
layout: post
---

### Przykład na lekcji

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
	<?php
		$login = isset($_GET['login']) ? $_GET['login'] : NULL;
		$haslo = isset($_GET['haslo']) ? $_GET['haslo'] : NULL;
	
	
		if(czy_przekazane_dane_sa_ok($login,$haslo)) {
			powitaj_uzytkownika($login);
		}
		else {
			wyswietl_formularz();
		}
	
		function wyswietl_formularz() {
		
			$formularz = <<<HEREDOC
					<form method="GET" action="#">
				<label>
				Wpisz swój login
					<input placeholder="Login" type="text" name="login"/>
				</label>
				<label>
					Wpisz swoje hasło
					<input placeholder="Haslo" type="password" name="haslo"/>
				</label>
				<input class=center type="submit" value="Zaloguj się"/>
			</form>
HEREDOC;
		echo $formularz;
	}
		function powitaj_uzytkownika($login) {
			echo "Witaj ".$login;	
		}
		function czy_przekazane_dane_sa_ok($login, $haslo) {
			return isset($login) && isset($haslo);
		}
	?>
	</div>

	</body>
	
	
	
</html>
```


### Wersja zadania z polem typu color

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
	<?php
		$login = isset($_GET['login']) ? $_GET['login'] : NULL;
		$haslo = isset($_GET['haslo']) ? $_GET['haslo'] : NULL;
		$kolor = isset($_GET['kolor']) ? $_GET['kolor'] : NULL;

	
		if(czy_przekazane_dane_sa_ok($login,$haslo)) {
			powitaj_uzytkownika($login, $kolor);
		}
		else {
			wyswietl_formularz();
		}
	
		function wyswietl_formularz() {
			
			$formularz = <<<HEREDOC
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

				<input class=center type="submit" value="Zaloguj się"/>
			</form>
HEREDOC;
		echo $formularz;
	}
		function powitaj_uzytkownika($login, $kolor) {
			echo "<div style=color:".$kolor.">";
			echo "Witaj ".$login;	
			echo "</div>";
		}
		function czy_przekazane_dane_sa_ok($login, $haslo) {
			return isset($login) && isset($haslo);
		}
	?>
	</div>

	</body>
	
	
	
</html>
```

### Zadanie domowe

Do formularza stworzonego na zajeciach dodaj kontrolke i wyswietl informacje:
 - pole typu email
 - pole typu data urodzenia
 
Jesli uzytkownik nie poda kompletu danych nie nalezy wyswietlac okna z powitaniem.
Oblicz i wyświetl wiek użytkownika.



### Formularz2


```php
<!DOCTYPE html>
<html>

    <head>
        <title>Formularz w HTML</title>
        <meta charset=utf-8/>
        <style>
        <!-- https://pastebin.com/07As6MFA -->
        <!-- https://pastebin.com/sbU5Kn6S -->
        body {
            border:2px solid red;

        }
        form {
                width:80%;
                margin:auto auto;
                padding:20px;
        }
        label {
            padding: 10px;
            display:block;
            overflow:auto;
        }
        label input {
            width:80%;
            float: right;
        }
            
        .center {
            display:block;
            margin: auto auto;
        }
            
            
            
            
        </style>
    </head>
    <body>
    <!-- Formularz z 2 polami typu input + przycisk SUBMIT -->
        <!-- 
            Metoda:
            - GET - dane przesyłane przez adres URL
            - POST - dane przesyłane przez nagłówki HTTP
        -->
<?php
function czy_przekazane_dane_ok() {
    $jestImie = isset($_GET['imie']);
    $jestNazwisko = isset($_GET['nazwisko']);
    return $jestImie && $jestNazwisko;
}

function wyswietl_formularz() {
    global $formularz;
    echo $formularz;
}

function wyswietl_powitanie() {
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $kolor = $_GET['kolor'];
    $wykszalcenie = $_GET['wyksztalcenie'];
    
    $div =<<<BLOK
        <div style='color:$kolor'>
            <p>Twoje imie: <b>$imie</b></p>
            <p>Twoje nazwisko: <b>$nazwisko</b></p>
            <p>Twoje wykszczlcenie: <b>$wykszalcenie</b></p>
        </div>
BLOK;
    echo $div;
}


$formularz = <<<FORM
        <form action="#" method="GET">
            <!-- 
                Uwaga: atrybut NAME jest wymagany !!!
            -->
            <label>
                Twoje imie: 
                <input type=text name="imie" placeholder="Wpisz imie"/>
            </label>
            <label>
                Twoje nazwisko: 
                <input type=text name="nazwisko" placeholder="Wpisz nazwisko"/>
            </label>
            <label>
                Ulubiony kolor: 
                <input type=color name="kolor" placeholder="Wpisz nazwisko"/>
            </label>
            <label>Podstawowe
                <input type=radio name="wyksztalcenie" value="Podstawowe">    
            </label>
            <label>Średnie
                <input type=radio name="wyksztalcenie" value="Średnie">
            </label>
            <label>Wyższe
                <input type=radio name="wyksztalcenie" value="Wyższe">
            </label>
            <input class=center type="submit" value="Wyślij formularz"/>
        </form>
FORM;

        if(czy_przekazane_dane_ok()) {
            wyswietl_powitanie();
        } else {
            wyswietl_formularz();
        }
            
?>
        </div>
        
    </body>

</html>

```