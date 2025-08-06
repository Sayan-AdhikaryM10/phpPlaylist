<?php

echo "This is for loop in action <br>";

// for ($index=1; $index < 6; $index++) {
//     // for(initialization;condition; updation) 
//     echo "The number is $index <br>";
// }
// Avoid running into infinite loops
// for ($i=0; $i < 87;) { 
//     echo $i;
// }


// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false; // 0 and 1 are not prime
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false; // Found a divisor other than 1 and itself 
        }
    }

    return true;// If no divisors found, it's prime
}
// Example usage
$numberToCheck = 13;// Change this to any positive integer

if (isPrime($numberToCheck)) {
    echo "$numberToCheck is a prime number. <br>";
} else {
    echo "$numberToCheck is not a prime number. <br>";
}

echo "For loop has ended";
?>