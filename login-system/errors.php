<?php $errors = array(); ?>
<?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
        <p><?php echo $error ?></p>
    <?php endforeach ?>
<?php endif ?>
<?php
//เมื่อกดปุ่ม logout ให้ย้อนกลับไปหน้า login
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php'); //ย้อนกลับไปหน้า login
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME Page</title>
</head>

<body>
    <h1>Home Page</h1>
    <!--ข้อความแจ้งเตือน -->
    <?php if (isset($_SESSION['success'])) : ?>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success'])
            ?>
        </h3>
    <?php endif ?>
    <!-- logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
        <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
        <!--แสดงข้อความ Welcom+username -->
        <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
    <?php endif ?>
    <!--ข้อความแจ้งเตือน -->
    <?php if (isset($_SESSION['success'])) : ?>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success'])
            ?>
        </h3>
    <?php endif ?>
</body>

</html>