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
    <div class="container">
        <form id="login-form" action="login.php" method="post">
            <h3>Login Form</h3>
            <hr>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Login">
        </form>
        <form style="display:none" id="register-form" action="login.php" method="post">
            <h3>Register Form</h3>
            <hr>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Register">
        </form>
        <button id="toggle-button" onclick="toggleView()">Register</button>

    </div>
    <script src="scripts/main.js"></script>
</body>
</html>