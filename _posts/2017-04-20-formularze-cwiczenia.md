---
title: Formularze - ćwiczenia
layout: post
---


### Zadanie na lekcji


Strona index.php

![](/images/zadania-php/proste_dzialania.png)

Przygotuj formularz według wzoru.

Po kliknieciu w wybrany przycisk przechodzimy do strony wyniki.php.

![](/images/zadania-php/proste_dzialania2.png)

Wymagania:
 - wyswietla sie wynik
 - w tytule okna wyswietla sie wybrane dzialanie
 - calosc jest wysrodkowana



Uwaga:
Prace rozpoczynamy od CSS i podstron.
 - https://developer.mozilla.org/pl/docs/Web/CSS/border-radius
 - https://www.creamsoft.com/blog/jak-wysrodkowac-element-na-stronie-www-za-pomoca-css-odpowiedz-na-wszystkie-pytania.html
 
Podpowiedź:

```php

<input type="submit" name="update_button" value="Update" />
<input type="submit" name="delete_button" value="Delete" />



// w kodzie PHP obslugujemy

if (isset($_POST['update_button'])) {
    //update action
} else if (isset($_POST['delete_button'])) {
    //delete action
} else {
    //no button pressed
}

```



