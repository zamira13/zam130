<?php
$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
echo $punakawan[0]; // Hasil Semar
echo "<br>";
echo $punakawan[3]; // Hasil Bagong
$punakawan[1] = "Semar";
$punakawan[2] = "Gareng";
$punakawan[3] = "Petruk";
$punakawan[4] = "Bagong";
echo "<br>";
echo $punakawan[3]; // Hasil Petruk
?>