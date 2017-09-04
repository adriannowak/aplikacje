---
title: Sortowanie tablic
layout: post
---

### Zadanie domowe

Dokonczyc zadanie:
Policz elementy tablicy: - patrzyste i nieparzyste.


```php
<?php

$liczby = [1,2,3,4,5,6,7,8,9,10];


function czy_parzysta($liczba) {
	return $liczba % 2 == 0;
}

function policz_parzyste($tablica) {
	$liczb_parzystych = 0;
	foreach($tablica as $liczba) {
		if(czy_parzysta($liczba)) {
			// zwiekszenie o 1
			$liczb_parzystych++;
		}
	}
	return $liczb_parzystych;
}

function policz_nieparzyste($tablica) {

}

echo "Liczb parzystych ";
echo policz_parzyste($liczby);


?>
```


