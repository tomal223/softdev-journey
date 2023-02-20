<?php

// Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenateBackwards($text1, $text2) {
    $lastChar = substr($text1, -1);
    return $text1 . substr($text2, 0, -1) . $lastChar;
}

$text1 = "hello";
$text2 = "world";
$concatenateResult = concatenateBackwards($text1, $text2);
echo $concatenateResult;
