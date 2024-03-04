<?php
echo "Enter the number of rows: ";
$rows = intval(readline());
echo "Enter the number of columns: ";
$columns = intval(readline());

$resultMatrix = [];

echo "Enter elements for the first matrix:\n";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
        $resultMatrix[$i][$j] = intval(readline());
    }
}

echo "Enter elements for the second matrix:\n";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
        $resultMatrix[$i][$j] += intval(readline());
    }
}

echo "Resultant matrix:\n";
foreach ($resultMatrix as $row) {
    echo implode(" ", $row) . "\n";
}
