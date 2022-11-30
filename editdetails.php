<?php include 'functions.php' ?>

<?php

if (isset($_POST['edit'])) {
    $editDetails = $_POST;
    $editDetails['uid'] = $_SESSION["uid"];
    $editDetails['name'] = $_POST["name"];
    $editDetails['email'] = $_POST["email"];
    $editDetails['password'] = $_POST["newpassword"];
    
    if(!edit_user($editDetails)) {
        $response = [
            'type' => 'error',
            'message' => 'Edit Failed'
        ];
    } else {
        $response = [
            'type' => 'success',
            'message' => 'Successfully Edited details'
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Edit Details | Drinksify</title>
</head>

<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>

        <section class="about-us" id="about-us">
            <div class="about-text">
                <div class="main-text-pages">
                    <h1>Edit Details</h1>
                </div>

                <?php if (isset($response)) { ?>
                    <div class="message-box <?= $response['type'] ?>" style="text-align: center;">
                        <p><?= $response['message'] ?></p>
                    </div>
                <?php } ?>
                
                <form action="?" method="post" class="checkout-form">
                    <p>Note: If you do not wish to update any particular field, type the original ones</p>
                    <input type="text" name="name" placeholder="First Name">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Old password">
                    <input type="password" name="newpassword" placeholder="New password">
                    <button type="submit" name="edit" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px; margin: 20px auto;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                </form>
            </div>
        </section>

        <?php include 'footer-white.php' ?>
    </div>
</body>

</html>