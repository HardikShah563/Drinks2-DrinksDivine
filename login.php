<?php include 'functions.php' ?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'Login Failed!'
    ];
  } else {
    header("Location: menu.php");
  }
}
?>

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
        <?php if (isset($response)) { ?>
          <div class="message-box <?= $response['type'] ?>" style="text-align: center;">
            <p><?= $response['message'] ?></p>
          </div>
        <?php } ?>

        <form action="?" method="POST">
            <input type="email" name="email" id="email" placeholder="Email Address" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" name="login" style="padding: 12px;">Login</button>
        </form>
    </section>
    <section class="account-setting">
        <p>Don't have an account? </p>
        <a href="./register.php">Create one</a>
    </section>
</body>
</html>