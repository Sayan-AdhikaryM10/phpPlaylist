<?php

// $age = 56;

// switch($age){

//     case 12:
//         echo "You are 12 years old <br>";
//         break;

//     case 45:
//         echo "You are 45 years old <br>";
//         break;

//     case 56:
//         echo "You are 56 years old boy <br>";
//         break;

//     default:
//         echo "Your age is weird <br>";
//         break;
//     }
$name = "sayan";
$maths = 85;
$science = 78;
$english = 92;

$totalMarks = $maths + $science + $english;

$percentage = ($totalMarks / 300) * 100;

$grade = '';

switch (true) {
    case $percentage >= 90:
        $grade = 'A';
        break;
    case $percentage >= 80:
        $grade = 'B';
        break;
    case $percentage >= 70:
        $grade = 'C';
        break;
    case $percentage >= 60:
        $grade = 'D';
        break;
    default:
        $grade = 'F';
}

echo "Student Marksheet:$name<br>";
echo "Maths: $maths<br>";
echo "Science: $science<br>";
echo "English: $english<br>";
echo "Total Marks: $totalMarks<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade<br>";
?>