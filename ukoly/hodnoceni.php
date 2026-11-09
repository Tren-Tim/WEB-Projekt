<?php
$studentName = "Petr Pavelka"; 
$test1 = 10; 
$test2 = 20; 
$test3 = 10;
$soucet = $test1 + $test2 + $test3;
$prumer = ($test1 + $test2 + $test3) / 3;

echo "<h1>Hodnocení studenta</h1>";
echo "<br>";
echo "<strong>Jméno studenta: </strong>" . $studentName . "<br>";
echo "<strong>Test 1: </strong>" . $test1 . "<br>";
echo "<strong>Test 2: </strong>" . $test2 . "<br>";
echo "<strong>Test 3: </strong>" . $test3 . "<br>";
echo "<strong>Součet bodů v testech: </strong>" . $soucet . "<br>";
echo "<strong>Průměr bodů z testů: </strong>" . $prumer . "<br>";

$points = $prumer;

if ($points < 0 || $points > 100) {
echo "Neplatný počet bodů.";
} elseif ($points >= 90) {
echo "Výborný";
} elseif ($points >= 75) {
echo "Chvalitebný";
} elseif ($points >= 60) {
echo "Dobrý";
} elseif ($points >= 40) {
echo "Dostatečný";
} else {
echo "Bonusové ůkoly:<br> 1+1= -----<br> 2+2= -----<br> 3+3= -----<br> 4+4= -----<br> 5+5= -----<br>";
}







