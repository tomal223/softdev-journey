<?php

/**
 * Function to show even or odd number
 *
 */

function evenOrOdd($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Function to print Factorial Numbers
 */

function factorial($n)
{
    $result = 1;

    for ($i = $n; $i > 1; $i--){
        $result += 1;
    }

    return $result;
}
