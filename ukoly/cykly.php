<?php
echo "<h1>Úkol A</h1>";
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}
?>
<h1>Úkol B</h1>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "<br>";
    for ($i = 2; $i <= 20; $i+=2) {
    
    echo $i . "<br>";
    
}
?>
<h1>Úkol C</h1>
<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
}
?>
<h1>Úkol D</h1>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "Součet čísel od 1 do 100 je: " . $sum;