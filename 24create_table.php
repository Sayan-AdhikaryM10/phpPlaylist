<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsayan";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
echo "Connection was successful<br>";

// Create a table (Use IF NOT EXISTS to avoid errors)
$sql = "CREATE TABLE IF NOT EXISTS `phptrip` ( 
    `sno` INT(6) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    `dest` VARCHAR(6) NOT NULL,
    PRIMARY KEY (`sno`)
)";

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if ($result) {
    echo "The table 'phptrip' was created successfully or already exists!<br>";
} else {
    echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
