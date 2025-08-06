<?php
/* Operators in PHP
1. Arithmetic operations
2. Assignment operators
3. Comparison operators
4. Logical operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic operations
echo "For a + b, the result is " . ($a + $b) . "<br>";
echo "For a - b, the result is " . ($a - $b) . "<br>";
echo "For a * b, the result is " . ($a * $b) . "<br>";
echo "For a / b, the result is " . ($a / $b) . "<br>";
echo "For a % b, the result is " . ($a % $b) . "<br>";
echo "For a ** b, the result is " . ($a ** $b) . "<br>";

// 2. Assignment operators
// $x = $a;
// echo "For x, the value is " . $x . "<br>";

// $a += 6;
// echo "For a, the value is " . $a . "<br>";

// $a -= 6;
// echo "For a, the value is " . $a . "<br>";

// $a *= 6;
// echo "For a, the value is " . $a . "<br>";

// $a /= 6;
// echo "For a, the value is " . $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is " . $a . "<br>";

// 3. Comparison operators
$x = 78;
$y = 78;

// echo "For x == y, the result is ";
// echo var_dump($x == $y);

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x >= y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x <= y, the result is ";
// echo var_dump($x <= $y);

echo "For x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";


// 4. Logical operators

$x = true;
$y = false;

echo "For x and y, the result is ";
echo var_dump($x and $y);
echo "<br>";

echo "For x && y, the result is ";
echo var_dump($x && $y);
echo "<br>";

echo "For x or y, the result is ";
echo var_dump($x or $y);
echo "<br>";

echo "For x || y, the result is ";
echo var_dump($x || $y);
echo "<br>";

echo "For  !y , the result is ";
echo var_dump(!$y);
echo "<br>";
?>