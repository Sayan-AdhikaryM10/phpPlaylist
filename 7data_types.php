<?php
$name = "Sayan";
$income = 200;

/* php data type
1. string
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7.Null
*/

// String - sequence of characters
$name = "sayan";
$friend = 'sawan';
echo "$name ka friend is $friend";


// Integer - Non decimal number
$income = 455;
$debt = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debt;

// Float - Decimal point number
$income = 344.5;
$debt = -45.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debt;

// Boolean -Can be either true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// object - Instances of classes
// Employee is a class ---> sayan can be one object


// Array - Used to store multiple values in a single variable
$friend = array("sayan","sawan","sam","ram","roy");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
echo "<br>";
echo $friend[4];
echo "<br>";
// echo $friend[5]; // will throw an error as the size of array is 5

// Null - Represents no value
$name = NULL;
echo var_dump($name);
?>