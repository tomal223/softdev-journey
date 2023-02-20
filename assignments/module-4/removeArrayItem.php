<?php

// Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLastItem($arr) {
    array_shift($arr); // remove the first element
    array_pop($arr); // remove the last element
    return $arr; // return the remaining elements as a new array
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$removedArray = removeFirstAndLastItem($arr);
print_r($removedArray);