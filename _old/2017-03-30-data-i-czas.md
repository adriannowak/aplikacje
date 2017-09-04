---
title: Data i czas
layout: post
---

### Przykład na lekcji

```php
<?php
header("refresh:1");

	//$aktualnyMiesiac = getdate()['mon'];
	//$dzien = getdate(time())['mday'];
	//echo $dzien;
	//echo pobierz_nazwe_miesiaca($aktualnyMiesiac);
	// echo pobierz_godzine();
 
	// YYYY-mm-DD
	//echo date('Y/m/d');
	// HH:MM:sscanf
	//echo "<br>";
	//echo date('H:i:s');
	
	
	
	
	
	// Rok w tyl? :)
	//print_r(getdate(time() - 31556926));
	//$tamtenRok = mktime(0,0,0,3,31,2016);
	//print_r(getdate($tamtenRok));
	
	$dataUrodzenia = mktime(0,0,0,8,31,1988);
	$aktualnyCzas = time();
	$ileSekund = $aktualnyCzas - $dataUrodzenia;
	
	//echo "Urodziles sie ".$ileSekund." temu";
	
//	print_r(getdate($ileSekund));
	
	$mojWiek = getdate($ileSekund);
	$miesiac = $mojWiek['mon'];
	$lat = $mojWiek['year'] - 1970;
	//echo "Zyjesz: ".$lat;
	//echo " i ".$miesiac." miesiecy ";
	//echo "czyli ". (($lat * 12) + $miesiac) . " miesiecy";
	//echo $mojWiek['year'] - 1970;
	
	//echo "Do konca roku zostalo:";
	
//	echo (365 - getdate()['yday']);
	$aktualnyRok = getdate()['year'];
	
	echo "Czy rok ".$aktualnyRok." jest przestepny? ";
	if(czy_rok_przestepny($aktualnyRok)) {
		echo "JEST PRZESTEPNY!!";
	}
	else {
		echo "NIE JEST!!";
	}
	
	
	
	function czy_rok_przestepny($rok) {
		//$sekundy = mktime(0,0,0,2,29,$rok);
		//$data = getdate($sekundy);
		//return $data['wday'] == 2;
	}
	
	function pobierz_godzine() {
		$godzina = dodaj_zero_wiodace(getdate()['hours']);
		$minuta = dodaj_zero_wiodace(getdate()['minutes']);		
		$sekunda = dodaj_zero_wiodace(getdate()['seconds']);
		

		echo $godzina.":".$minuta.":".$sekunda;
	}
	
	function dodaj_zero_wiodace($liczba) {
		if($liczba <= 9) {
			return "0".$liczba;
		}
		return $liczba;
	}
	function pobierz_nazwe_miesiaca($miesiac) {
		$dane = ["","Styczen","Luty","Marzec","Kwiecien","Maj"];
		return $dane[$miesiac];
	}

```

### Zadanie domowe

7.8, 7.9, 7.10 strona 221