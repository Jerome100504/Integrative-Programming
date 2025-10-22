<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5: PHP + JavaScript (AJAX)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        #response-message { 
            margin-top: 20px; 
            padding: 10px; 
            border: 1px solid #ccc; 
            white-space: pre-wrap; 
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <h2>User Registration Form (AJAX)</h2>

    <form id="user-form">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="Alex"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="alex@example.com"><br><br>

        <button type="submit">Submit via AJAX</button>
    </form>

    <div id="response-message">
        Response will appear here...
    </div>

    <script>
        $(document).ready(function() {
            $('#user-form').on('submit', function(e) {
                e.preventDefault(); // Stop the default form submission

                // Collect form data
                const formData = {
                    name: $('#name').val(),
                    email: $('#email').val()
                };

                // 4. Send the data to a PHP file without reloading.
                $.ajax({
                    url: 'lab5_backend.php', // The PHP script
                    type: 'POST',
                    contentType: 'application/json', // Tell the server we're sending JSON
                    data: JSON.stringify(formData), // Convert JavaScript object to JSON string
                    dataType: 'json', // Tell jQuery to expect a JSON response

                    success: function(response) {
                        // 5. The PHP file receives data, processes it, and responds in JSON.
                        // 6. The JavaScript file receives data and displays it on the webpage without reloading.
                        $('#response-message').html(
                            '<strong>Status:</strong> ' + response.status + '<br>' +
                            '<strong>Message:</strong> ' + response.message + '<br>' +
                            '<strong>User:</strong> ' + response.user.name + ' (' + response.user.email + ')'
                        );
                    },
                    error: function(xhr, status, error) {
                        $('#response-message').text('An error occurred: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
ajax.googleapis.com
