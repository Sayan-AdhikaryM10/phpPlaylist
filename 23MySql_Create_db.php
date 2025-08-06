<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry, we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful<br>";
}

// Create a db (Use IF NOT EXISTS)
$sql = "create database IF NOT EXISTS dbsayan";
$result = mysqli_query($conn, $sql);

// Debugging: Check what `$result` contains
if ($result) {
    echo "The database db was created successfully or exists!<br>";
}else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
?>
