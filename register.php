<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
        <h2>sign up</h2>
        <form method="post" action="handler_register.php">
            <input type="text" placeholder="email" name="email" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">sign up</button>
            <p>Have account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
