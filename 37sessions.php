<?php 
// what is a session?
// session is a way to store information (in variables) to be used across multiple pages.

// verify the user login info
session_start();
$_SESSION['username'] = "Sayan";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";

?>