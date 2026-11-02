<?php
//Základní informace o studentovi
$name = "Tim";
$age = 16;
$vyska = 1.85;
$trida = "2.I";
$student = true;
$oblibeny_jazyk = "JavaScript";
// Výpis informací o studentovi
echo "<h1>Můj studentský profil</h1>";
echo "<br>";
echo "<strong>" . $name . "</strong>";
echo "<br>";
echo "<strong>" . $age . "</strong>";
echo "<br>";
echo "<strong>" . $vyska . "</strong>";
echo "<br>";
echo "<strong>" . $trida . "</strong>";
echo "<br>";
echo "<strong>" . ($student ? "Je student" : "Není student") . "</strong>";
echo "<br>";
echo "<strong>" . $oblibeny_jazyk . "</strong>";
//Datové typy
echo "<h1>Datové typy</h1>";
echo "<br>";
var_dump ($name);
echo "<br>";
var_dump ($age);
echo "<br>";
var_dump ($vyska);
echo "<br>";
var_dump ($trida);
echo "<br>";
var_dump ($student);
echo "<br>";
var_dump ($oblibeny_jazyk);
