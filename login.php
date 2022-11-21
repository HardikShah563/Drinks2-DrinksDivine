<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Login | Drinks Divine</title>
</head>
<body>
    <?php include 'navbar.php' ?>

    <section class="login-register">
        <h1>Login</h1>
        <form>
            <input type="email" name="user-email" id="user-email" placeholder="Email Address" required>
            <input type="password" name="user-password" id="user-password" placeholder="Password" required>
            <button type="submit"><a href="./menu.html">Login</a></button>
        </form>
    </section>
    <section class="account-setting">
        <p>Don't have an account? </p>
        <a href="./register.html">Create one</a>
    </section>
</body>
</html>