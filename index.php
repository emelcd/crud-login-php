<?php include 'includes/conn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDs Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body >
    <h1 class="title">dB CRUD LOGIN SyS</h1>
    <div class="container">
        <button id="toggle-button" onclick="toggleView()">Register</button>
        <form id="login-form" action="utils/login.php" method="post">
            <h3>Login Form</h3>
            <hr>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Login">
        </form>
        <form style="display:none" id="register-form" action="utils/register.php" method="post">
            <h3>Register Form</h3>
            <hr>
            <label for="username">UserName</label>
            <input type="text" name="username" id="username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Register">
        </form>

    </div>
    <script src="scripts/main.js"></script>
</body>
</html>