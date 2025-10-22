<?php
// 1. Create a PHP file named lab2_decode.php

// 2. Declare a JSON string with name, age, and email.
$json_string = '{"name": "Maria", "age": 28, "email": "maria@example.com"}';

// 3. Use json_decode() to convert it into a PHP object and a PHP associative array.
// Convert to PHP Object (default behavior)
$php_object = json_decode($json_string);

// Convert to PHP Associative Array (by passing 'true' as the second argument)
$php_array = json_decode($json_string, true);

echo "<h2>Decoding JSON</h2>";
echo "<h3>As PHP Object:</h3>";
// 4. Display individual values (e.g., name and email) in both formats.
echo "Name: " . $php_object->name . "<br>";
echo "Email: " . $php_object->email . "<br>";

echo "<h3>As PHP Associative Array:</h3>";
echo "Name: " . $php_array['name'] . "<br>";
echo "Email: " . $php_array['email'] . "<br>";

echo "<hr>";
echo "<h3>Full Array/Object Representation:</h3>";
echo "<h4>Object:</h4>";
var_dump($php_object);
echo "<h4>Array:</h4>";
var_dump($php_array);
?>
