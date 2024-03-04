<?php
echo "Enter three numbers:\n";

$number1 = readline("Number 1: ");
$number2 = readline("Number 2: ");
$number3 = readline("Number 3: ");

$number1 = intval($number1);
$number2 = intval($number2);
$number3 = intval($number3);

if ($number1 <= $number2 && $number1 <= $number3) {
    $minimum = $number1;
    if ($number2 <= $number3) {
        $middle = $number2;
        $maximum = $number3;
    } else {
        $middle = $number3;
        $maximum = $number2;
    }
} elseif ($number2 <= $number1 && $number2 <= $number3) {
    $minimum = $number2;
    if ($number1 <= $number3) {
        $middle = $number1;
        $maximum = $number3;
    } else {
        $middle = $number3;
        $maximum = $number1;
    }
} else {
    $minimum = $number3;
    if ($number1 <= $number2) {
        $middle = $number1;
        $maximum = $number2;
    } else {
        $middle = $number2;
        $maximum = $number1;
    }
}
echo "Numbers from the minimum to maximum: $minimum, $middle, $maximum\n";
?>
