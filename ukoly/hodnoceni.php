<?php
$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;
$grade1 = 0;
$grade2 = 0;
$grade3 = 0;
$prumer = ($test1 + $test2 + $test3) / 3;
$soucet = $test1 + $test2 + $test3;
$procenta = (($test1 + $test2 + $test3) / 3) . "%";

// Test 1
if (($test1 <= 100) && ($test1 >= 90)) {
    $grade1 = 1;
} elseif (($test1 >= 75) && ($test1 <= 89)) {
    $grade1 = 2;
} elseif (($test1 >= 60) && ($test1 <= 74)) {
    $grade1 = 3;
} elseif (($test1 >= 40) && ($test1 <= 59)) {
    $grade1 = 4;
} elseif (($test1 >= 0) && ($test1 <= 39)) {
    $grade1 = 5;
}

// Test 2
if (($test2 <= 100) && ($test2 >= 90)) {
    $grade2 = 1;
} elseif (($test2 >= 75) && ($test2 <= 89)) {
    $grade2 = 2;
} elseif (($test2 >= 60) && ($test2 <= 74)) {
    $grade2 = 3;
} elseif (($test2 >= 40) && ($test2 <= 59)) {
    $grade2 = 4;
} elseif (($test2 >= 0) && ($test2 <= 39)) {
    $grade2 = 5;
}

// Test 3
if (($test3 <= 100) && ($test3 >= 90)) {
    $grade3 = 1;
} elseif (($test3 >= 75) && ($test3 <= 89)) {
    $grade3 = 2;
} elseif (($test3 >= 60) && ($test3 <= 74)) {
    $grade3 = 3;
} elseif (($test3 >= 40) && ($test3 <= 59)) {
    $grade3 = 4;
} elseif (($test3 >= 0) && ($test3 <= 39)) {
    $grade3 = 5;
}

// Výpisy...
echo "Jméno: $studentName<br>";
echo "test 1: $grade1<br>";
echo "test 2: $grade2<br>";
echo "test 3: $grade3<br>";
echo "body z testu 1: $test1<br>";
echo "body z testu 2: $test2<br>";
echo "body z testu 3: $test3<br>";
echo "průměr: $prumer<br>";
echo "procenta: $procenta";