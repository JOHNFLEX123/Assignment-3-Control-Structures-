<?php
function smallestIndex($array, $size)
{
    if ($size <= 0) {
        return -1;
    }

    $minIndex = 0; // Initialize the index of the smallest element to the first element
    for ($i = 1; $i < $size; $i++) {
        if ($array[$i] < $array[$minIndex]) {
            $minIndex = $i; // Update the index of the smallest element
        }
    }
    return $minIndex; // Return the index of the smallest element
}

// usage(a program to test the function.):
$Array = [5, 3, 9, 1, 7];
$size = count($Array);
$index = smallestIndex($Array, $size);
echo "Index of the smallest element: $index\n"; // Output: Index of the smallest element: 3
