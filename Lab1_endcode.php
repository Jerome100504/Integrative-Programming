<?php
// 1. Create a PHP file named lab1_encode.php

// 2. Declare a PHP associative array with your ID, name, age, and course.
$student = [
    "id"    => 101,
    "name"  => "Neo",
    "age"   => 21,
    "course" => "CIT"
];

// 3. Use json_encode() to convert the array to a JSON string.
$json_string = json_encode($student);

// 4. Output the JSON string to the browser.
echo $json_string;
?>
