<?php include 'functions.php' ?>

<?php

if (isset($_POST['signup'])) {
  $data = $_POST;
  $user_exists = email_exists($data['email']);
  if ($user_exists) {
    $response = [
      'type' => 'error',
      'message' => 'Email is Already Taken!',
    ];
  } else {
    if ($data["password"] == $data["cpassword"]) {
      $data["type"] = 'user';
      $user = signup($data);
      if ($user) {
        $response = [
          'type' => 'success',
          'message' => 'User Registered Successfully!',
        ];
        login($data);
      } else {
        $response = [
          'type' => 'error',
          'message' => 'Some Error Occured!',
        ];
      }
    } else {
      $response = [
        'type' => 'error',
        'message' => 'Passwords should match!',
      ];
    }
  }
}

?>
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

        <?php if (isset($response)) { ?>
          <div class="message-box <?= $response['type'] ?>">
            <p><?= $response['message'] ?></p>
          </div>
        <?php } ?>

        <form action="?" method="POST">
            <input type="text" name="user-name" id="user-name" placeholder="User-Name" required>
            <input type="email" name="user-email" id="user-email" placeholder="Email Address" required>
            <input type="password" name="user-password" id="user-password" placeholder="Password" required>
            <button type="submit" name="register" style="padding: 12px;">Register</button>
        </form>
    </section>
    <section class="account-setting">
        <p>Already have an account? </p>
        <a href="./login.php">Login</a>
    </section>
</body>
</html>