<?php
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login</h1>
    <form action="logindb.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <h3>
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </h3>
        <?php endif ?>
        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">
        
        <button type="submit" name="login_user" class="btn">Login</button>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
    </form>
</body>

</html>