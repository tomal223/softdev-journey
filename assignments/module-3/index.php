<?php

// Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function evenOddChecker($num){

    return $num % 2 == 0 ? "Even" : "Odd";

}

$number = 2101;
 
echo  $number . " is an " . evenOddChecker($number) . " Number";



echo "<br> ============================ <br>";



// 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;

for($i = 0; $i <= 100; $i++){
    $sum += $i;
}
echo "The total sumation of (1+2+3...…….100) this number series is: $sum";