<?php

// Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargest($arr) {
    
    if (count($arr) < 2) {
        return false;
    }
 
    arsort($arr);
 
    $secondLargest = array_slice($arr, 1, 1, true);

    return reset($secondLargest);
}

$numbers = array(4, 6, 2, 8, 5);
$secondLargest = findSecondLargest($numbers); 
printf("Output: %s", $secondLargest);
 