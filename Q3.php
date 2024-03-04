<?php
echo "Enter a string: ";
$inputString = readline();

$characterArray = str_split($inputString);

// Iterating through and converting each character to uppercase
foreach ($characterArray as &$char) {
    $char = strtoupper($char);
}

echo "Uppercase string: " . implode("", $characterArray) . "\n";
?>
