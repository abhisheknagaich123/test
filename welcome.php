<?php 

session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    echo "Welcome, User ID: <br>" . $_SESSION['user_id'];
    // Add your logged-in user content here
          echo '<br><a href="logout.php">Logout</a>';
}
else{
	echo "please login <br>";
	 echo '<a href="index.php">click Login</a>';
}

 ?>
 