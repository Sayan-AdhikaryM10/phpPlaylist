<?php

$name  = "Sayan is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Sayan");
echo "<br>";
echo str_replace("Sayan", "Ram", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy   ");
echo "<br>";
echo ltrim("   this is a good boy   ");
echo "</pre>";
?>