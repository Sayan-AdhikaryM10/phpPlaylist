<?php
echo "while loops in php";echo "<br>";
// echo 1;echo "<br>";
// echo 2;echo "<br>";
// echo 3;echo "<br>";
// echo 4;echo "<br>";
// echo 5;echo "<br>";

/* 
while (condition){
    some line of code here;
}
*/

// $i = 0;
// while($i<5){
//     echo "The value of i is ";
//     echo $i+1;
//     echo "<br>";
//     $i+=1;
// }

$limit = 10;

$first = 0;
$second = 1;

echo "Fibonacci series (first $limit numbers):<br>";
echo "$first $second ";

$count = 2;

while ($count < $limit) {
    $next = $first + $second;
    echo "$next ";
    $first = $second;
    $second = $next;
    $count++;
}
?>