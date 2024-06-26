<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Drinks Divine</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php

    if (isset($_POST['add-to-cart'])) {
        $data = $_POST;
        $id = $_POST["dID"];
        if (add_to_cart($id)) {
            $response = [
                'type' => 'success',
                'message' => 'Drink is added to cart successfully!',
            ];
        }
        else {
            $response = [
                'type' => 'success',
                'message' => 'Some Error Occured, Please try again!',
            ];
        }
    } 
    
    else if (isset($_POST['remove-from-cart'])) {
        $id = $_POST["dID"];
        if (remove_from_cart($id)) {
            $response = [
            'type' => 'success',
            'message' => 'Drink is removed from cart',
            ];
        } else {
            $response = [
            'type' => 'error',
            'message' => 'Some Error Occured, Please try again!',
            ];
        }
    }

    ?>

    <div class="message" style="text-align: center; margin-top: 200px;">
        <h1><?= $response['message'] ?></h1>
    </div>

    <footer class="footer-yellow" style="margin-top: 180px; position: absolute; bottom: 0px; width: 100%;">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
    </footer>
</body>

</html>