<?php
// Database Connection
require 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration Logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Check if username already exists
    $checkExistingUser = "SELECT id FROM userdata WHERE username = '$inputUsername'";
    $result = $conn->query($checkExistingUser);

    if ($result->num_rows > 0) {
        echo "Username already exists. Choose a different one.";
    } else {
        // Insert new user into the database
        // $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT); // Hash the password
        $insertUser = "INSERT INTO userdata (username, password) VALUES ('$inputUsername', '$inputPassword')";
        
        if ($conn->query($insertUser) === TRUE) {
            //echo "Registration successful. You can now login.";
            session_start();
             $_SESSION['user_id'] =$inputUsername;
echo "<script>location.href='welcome.php';</script>";
        } else {
            echo "Error: " . $insertUser . "<br>" . $conn->error;
        }
    }
}
?>
