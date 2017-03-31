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



