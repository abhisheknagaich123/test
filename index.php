<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      text-align: left;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }

    .switch-form {
      margin-top: 15px;
    }

    .switch-form a {
      color: #4caf50;
      text-decoration: none;
    }

    .switch-form a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <form id="loginForm" action="login.php" method="post">
    <h2>Login</h2>
    <label for="loginUsername">Username:</label>
    <input type="text" id="loginUsername" name="username" required>

    <label for="loginPassword">Password:</label>
    <input type="password" id="loginPassword" name="password" required>

    <button type="submit" name="submit">Login</button>

    <div class="switch-form">
      <span>Don't have an account? <a href="#" onclick="showSignupForm()">Sign up</a></span>
    </div>
  </form>

  <form id="signupForm" style="display: none;" action="reg.php" method="post">
    <h2>Sign up</h2>
    <label for="signupUsername">Username:</label>
    <input type="text" id="signupUsername" name="username" required>

    <label for="signupPassword">Password:</label>
    <input type="password" id="signupPassword" name="password" required>

    <button type="submit" name="submit">Sign up</button>

    <div class="switch-form">
      <span>Already have an account? <a href="#" onclick="showLoginForm()">Login</a></span>
    </div>
  </form>

  <script>
    function showSignupForm() {
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('signupForm').style.display = 'block';
    }

    function showLoginForm() {
      document.getElementById('loginForm').style.display = 'block';
      document.getElementById('signupForm').style.display = 'none';
    }
  </script>

</body>
</html>
