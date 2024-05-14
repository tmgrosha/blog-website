<?php
// This is just a placeholder, you should replace it with your actual authentication logic

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your authentication logic here
    // For demonstration, let's just check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        // Authentication successful, redirect to a success page
        header("Location: success.html");
        exit();
    } else {
        // Authentication failed, redirect back to login page with an error message
        header("Location: index.html?error=1");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    fsdfasdf
    
</body>
</html>
