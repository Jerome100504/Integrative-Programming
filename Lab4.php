
<?php
// 1. Create a PHP script named lab4_input.php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["message" => "Only POST requests are accepted."]);
    exit;
}

// 2. Use file_get_contents('php://input') to read incoming JSON data.
$json_data_string = file_get_contents('php://input');

// 3. Decode it using json_decode(). We'll decode it to an associative array.
$data = json_decode($json_data_string, true);

// Set the content type for a JSON response
header('Content-Type: application/json');

// Check if decoding was successful and data is not empty
if ($data === null) {
    http_response_code(400); // Bad Request
    echo json_encode(["message" => "Invalid JSON data received."]);
    exit;
}

// 4. Access and display the received values.
if (isset($data['username']) && isset($data['password'])) {
    $username = $data['username'];
    $password = $data['password'];

    // In a real application, you would validate credentials here.
    // For this exercise, we just echo them back in a JSON success response.
    $response = [
        "status"   => "success",
        "message"  => "Input received and decoded.",
        "received_data" => [
            "username" => $username,
            // WARNING: Never echo a password in a real application!
            "password" => $password
        ]
    ];
    echo json_encode($response);

} else {
    http_response_code(400); // Bad Request
    echo json_encode(["message" => "Missing username or password in JSON input."]);
}
?>
