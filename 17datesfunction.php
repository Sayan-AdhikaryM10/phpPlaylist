<?php
echo "Welcome to the world of dates <br>";
// $d = date("dS F Y ga");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php in comments below 
// set the default timezone to use.
date_default_timezone_set('UTC');
// now
$date = new DateTimeImmutable();
// Prints something like: Wednesday
echo $date->format('l'), "<br>";

echo $date->format('l jS \o\f F Y h:i:s A'), "<br>";

echo $date->format(DateTimeInterface::RFC2822), "<br>";


$date = date_create('2024-08-08');
echo date_format($date, 'Y-m-d H:i:s');
$year = date("Y-m-d");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";
?>