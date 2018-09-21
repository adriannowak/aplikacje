<?php
 function dodawanie($a, $b) {
     return $a + $b;
 }

 function odejmowanie($a, $b) {
     return $a - $b;
 }

 function mnozenie($a, $b) {
     return $a*$b;
 }

 function dzielenie($a, $b) {
     if($b == 0) {
         return "Błąd! Nie dzielimy przez 0";
     }
     return $a / $b;
 }