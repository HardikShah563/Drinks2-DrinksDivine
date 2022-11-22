<?php include 'functions.php' ?>

<?php

if (isset($_POST['register'])) {
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
          'message' => 'User Registered Successfully! You can Log in!',
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
          <div class="message-box <?= $response['type'] ?>" style="text-align: center;">
            <p><?= $response['message'] ?></p>
          </div>
        <?php } ?>

        <form action="?" method="POST">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email Address" required>
            <input type="password" name="password" id="password" placeholder="Create Password" required>
            <input type="password" name="cpassword" id="cpassword" placeholder="Retype Password" required>
            <button type="submit" name="register" style="padding: 12px;">Register</button>
        </form>
    </section>
    <section class="account-setting">
        <p>Already have an account? </p>
        <a href="./login.php">Login</a>
    </section>
</body>
</html>