<?php
// Database Connection
$host = "localhost";
$username = "root";
$password = "";
$database = "antino";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start Session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    echo "<script>location.href='welcome.php';</script>";
    // Add your logged-in user content here
} else {
    // If not logged in, provide a login form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process login form
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        // Validate credentials (sample validation, replace with your authentication logic)
        $sql = "SELECT username FROM userdata WHERE username = '$inputUsername' AND password = '$inputPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Authentication successful, set session variables
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['username'];
           echo "<script>location.href='welcome.php';</script>";
            // Add your logged-in user content here
        } else {
            echo "";
             echo "<script>alert('Invalid username or password.'); location.href='index.php';</script>";
        }
    }}
?>
