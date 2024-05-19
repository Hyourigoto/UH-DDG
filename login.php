<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="post" action="handler_login.php">
            <input type="text" placeholder="email" required>
            <input type="password" placeholder="password" required>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>