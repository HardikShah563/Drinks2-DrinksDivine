<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Register | Drinks Divine</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    
    <section class="login-register">
        <h1>Regsiter New Account</h1>
        <form>
            <input type="text" name="user-name" id="user-name" placeholder="User-Name" required>
            <input type="email" name="user-email" id="user-email" placeholder="Email Address" required>
            <input type="password" name="user-password" id="user-password" placeholder="Password" required>
            <button type="submit"><a href="./menu.html">Register</a></button>
        </form>
    </section>
    <section class="account-setting">
        <p>Already have an account? </p>
        <a href="./login.html">Login</a>
    </section>
</body>
</html>