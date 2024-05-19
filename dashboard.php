<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <style>
        h1{
            font-family: Arial, sans-serif;
        }
    </style>
    <?php
    session_start();
    if (!$_SESSION['user_login']) {
        header("Location: login.php");
    }
    

    $user = $_SESSION['user_login'];
    ?>
    <h1>Welcome <?php echo $user['email']; ?> </h1>

</body>
</html>
