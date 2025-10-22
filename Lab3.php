<?php
// 1. Create a PHP script named lab3_api.php

// 2. Set the Content-Type header to application/json.
header('Content-Type: application/json');

// 3. Create an array containing user profile information (id, name, email, status).
$user_profile = [
    "id"     => "T001",
    "name"   => "Theresa",
    "email"  => "teresa@example.com",
    "status" => "active"
];

// 4. Use json_encode() to output the response.
$json_response = json_encode($user_profile);
echo $json_response;

// 5. Test the script in the browser or Postman.
// (You'll need to navigate to this file in your browser/Postman.)
?>
