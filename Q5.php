<?php
$alpha = array();

for ($i = 0; $i < 50; $i++) {
    if ($i < 25) {
        $alpha[$i] = $i * $i; // First 25 components are equal to the square of the index variable
    } else {
        $alpha[$i] = 3 * $i; // Last 25 components are equal to three times the index variable
    }
}

// Output the array with 10 elements per line
foreach (array_piece($alpha, 10) as $piece) {
    echo implode(" ", $piece) . "\n";
}
