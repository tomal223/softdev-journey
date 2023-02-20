<?php

//  Write a PHP function to check if a string contains only letters and whitespace.


function letterAndWhitespaceChecker($str)
{
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$string1 = "Hello world";

if (letterAndWhitespaceChecker($string1)) {
    echo "Content 1 contains only letters and whitespace";
} else {
    echo "Content 1 contains non-letter and/or non-whitespace characters";
}

echo "<br>";

$string2 = "Hello world 123";

if (letterAndWhitespaceChecker($string2)) {
    echo "Content 2 contains only letters and whitespace";
} else {
    echo "Content 2 contains non-letter and/or non-whitespace characters";
}
