 <?php
include_once "functions.php";

// // For Loop

// for ($i = 0; $i < 10; $i++) {
//     echo $i . " Video Title Here ";
//     echo "<br />";
// }
// echo "<br/>";

// for ($i = 10; $i > 0; $i-=1) {
//     echo $i . ":" . (10 - $i);
//     echo "<br />";
//     echo PHP_EOL;
// }

// echo "<br/>";

// for($i = 10, $n = 0; $i > 0, $n < 10; $i--, $n++){
//      echo $i . ":" . $n . "<br/>";
// }

// // Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

// echo "============================== <br/>";

// for ($i = 1; $i <= 10; $i++) {
//     //  if($i <= 9){
//     //     echo $i . "-";
//     //  } else{
//     //      echo $i;
//     //  }
//     echo ($i <= 9) ? $i . "-" : $i;
// }

// // Create a script using a for loop to add all the integers between 0 and 30 and display the total.

// echo "<br/>============================== <br/>";

// $sum = 0;

// for ($i = 0; $i <= 30; $i++) {
//     $sum += $i;
// }
// echo "The total value is: $sum";

// // Create a script to construct the following pattern, using nested for loop.

// echo "<br/>============================== <br/>";

// for ($x = 1; $x <= 5; $x++) {
//     for ($y = 1; $y <= $x; $y++) {
//         echo "*";
//         if ($y < $x) {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }

// Printing the Fibonacci Series with Loops

// $n = 10; // set the number of terms to generate
// $prev = 0;
// $current = 1;

// for ($i = 1; $i <= $n; $i++) {
//     echo $current . " ";
//     $next = $prev + $current;
//     $prev = $current;
//     $current = $next;
// }
// echo "<br/>============================== <br/>";

// // Even or Odd number finder
// $n = 44;
// if (evenOrOdd($n)) {
//     echo "$n is an Even number";
// } else {
//     echo "$n is an Odd number";
// }

//  $foo = function ($x) {
//      return $x * 2;
//  };

//  $bar = function ($x) use ($foo) {
//      return $foo($x) + 1;
//  };

//  echo $bar(5);

// function strFunc($str)
// {
//     if (strlen($str) == 0) {
//         return "";
//     } else {
//         return strFunc(substr($str, 1).substr($str, 0, 1));
//     }
// }

//  echo strFunc("hello");

//  $numbers = array(1, 2, 3, 4, 5);

//  $sum = 0;

//  foreach ($numbers as $number) {
//     if($number%2 == 0){
//          continue;
//     }
//      $sum += $number;
//  }

//  echo $sum;

//  $numbers = array(1, 2, 3, 4, 5);

//  $i = 0;
//  do {
//      echo $numbers[$i];
//      $i++;

//  } while ($i < count($numbers));

// function fun($x, $y){
//      $x = 4;
//      $y = 3;
//      $z = $x + $y/$y + $x;

//      echo "$z";
// }

//  fun(3, 4);

// Recursive Function

function printNumber($start, $end, $stepping = 1)
{
    if ($start > $end) {
        return;
    }

    echo $start . "<br>";

    $start += $stepping;

    printNumber($start, $end);

}

printNumber(1, 20, 10);

