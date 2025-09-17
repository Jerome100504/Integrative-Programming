<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div style='
        max-width:500px;
        margin:50px auto;
        padding:20px;
        border-radius:15px;
        background:#f9f9f9;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
        font-family:sans-serif;'>
        
        <h2 style='color:#6c63ff;'>Message Received ✅</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b><br>$message</p>
    </div>";
}
?>

<form method="post" action="" style="
    max-width:500px;
    margin:50px auto;
    padding:20px;
    border-radius:15px;
    background:#e6e6fa;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    font-family:sans-serif;">
    <h2 style="color:#6c63ff;">Contact Us</h2>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"></textarea><br>
    <button type="submit" style="background:#6c63ff;color:#fff;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;">Send Message</button>
</form>