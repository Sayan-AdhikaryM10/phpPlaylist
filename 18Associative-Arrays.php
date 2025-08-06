<?php

echo "Welcome to associative arrays in php <br>";
// These are called indexed arrays:
// $arr = array('this','that','what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative arrays
$favCol = array('ram' => 'red', 'sam' => 'green', 'sayan' => 'blue','sawan' => 'yellow', 8 => 'brown');


// echo $favCol['sayan'];
// echo "<br>";
// echo $favCol['ram'];
// echo "<br>";
// echo $favCol['sam'];
// echo "<br>";
// echo $favCol['sawan'];
// echo "<br>";
// echo $favCol[8];

foreach ($favCol as $key => $value) {
    echo "<br> Favorite color of  $key is $value";
}

?>