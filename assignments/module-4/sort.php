<?php

// Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


function sortArrayByLength($arr)
{
    usort($arr, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}

$arr = array("apple", "banana", "orange", "grapefruit", "pear");
$sorted = sortArrayByLength($arr);
print_r($sorted);
