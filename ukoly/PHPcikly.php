<?php
echo "Ukol A:";
for ($i = 1; $i <= 8; $i++) {
    echo $i;
    echo "<br>";
}
echo "<br>";
echo "Ukol B:";
echo "<br>";
for ($i = 2; $i <= 20; $i+=2) {
    echo $i;
    echo "<br>";
}
echo "<br>";
echo "Ukol C:";
echo "<br>";
$vysledek = 0;
$number = 7;
$cislo = 2;
for ($i = 1; $i <= $cislo; $i++) {
    $vysledek = $vysledek * $i;
    echo $vysledek;
}
