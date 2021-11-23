<?php
session_start();
if ( isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == TRUE) {
        header ("Location: index.php");
    }
}
?>
<!--form taken from https://codeshack.io/secure-login-system-php-mysql/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="check.php" method="post">
        <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['logout'])) {?>
            <p class="logout-success"><?php echo $_GET['logout']; ?></p>
        <?php } ?>
        <span class="input-fields">
            <label for="username"></label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password"></label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">
        </span>
    </form>
</div>
</body>
</html>

