<?php
echo "Enter three numbers:\n";

$number1 = readline("Number 1: ");
$number2 = readline("Number 2: ");
$number3 = readline("Number 3: ");

$number1 = intval($number1);
$number2 = intval($number2);
$number3 = intval($number3);

if ($number1 <= $number2 && $number1 <= $number3) {
    $min = $number1;
    if ($number2 <= $number3) {
        $mid = $number2;
        $max = $number3;
    } else {
        $mid = $number3;
        $max = $number2;
    }
} elseif ($number2 <= $number1 && $number2 <= $number3) {
    $min = $number2;
    if ($number1 <= $number3) {
        $mid = $number1;
        $max = $number3;
    } else {
        $mid = $number3;
        $max = $number1;
    }
} else {
    $min = $number3;
    if ($number1 <= $number2) {
        $mid = $number1;
        $max = $number2;
    } else {
        $mid = $number2;
        $max = $number1;
    }
}
echo "Numbers from the minimum to maximum: $min, $mid, $max\n";
