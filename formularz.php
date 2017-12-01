<?php
//
//$i = 0;
//
//while($i <10) {
//    echo "Wyświetlam liczbę ${i} <br>";
//    $i++;
//}
//$i = 0;
//
//for(;$i<10;$i++) {
//    echo "Wyświetlam liczbę ${i} <br>";
//}
//
//
//$tabl = array("1","2","3","4","5");
//
//for($j = 0;$j<count($tabl);$j++) {
//    $v = $tabl[$j];
//    echo "Wartośc z tablicy: ${v} <br>";
//}
//
//foreach($tabl as $v) {
//    echo "Wartośc z tablicy: ${v} <br>";
//}
//

//$_POST
//$_GET
//$_SERVER
//$_ENV
//$_COOKIE


?>


<html>

<body>
<form method="GET" action="formularz.php">
    <input name="imie" type="search" placeholder="Imię" value="Adam">
    <input name="nazwisko" type="search" placeholder="Nazwisko" value="Kowalski">
    <input id="hidden" name="przegladarka" type="hidden"/>
    <input type="checkbox" name="zgoda">
    <input type="radio" name="plec" value="KOBIETA">
    <input type="radio" name="plec" value="MEZCZYZNA">
    <input type="submit" value="Dodaj uzytkownika"/>
</form>

<script type="text/javascript">
    document.getElementById("hidden").value = navigator.appName;
</script>

<?php
$imie = $_GET['imie'];
$nazwisko = $_GET['nazwisko'];
$plec = $_GET['plec'];
$przegladarka = $_GET['przegladarka'];

echo "<table border='1px'>";
echo "<tr>";
echo "<th>Imie i nazwisko</th>";
echo "<th>Płeć</th>";
echo "<th>Przedlądarka</th>";
echo "</tr>";
for($i = 0;$i<10;$i++) {
    echo "<tr>";
    echo "<td>${imie} ${nazwisko}</td>";
    echo "<td>${plec}</td>";
    echo "<td>${przegladarka}</td>";
    echo "</tr>";

}
echo "</table>";

?>
</body>
</html>













































