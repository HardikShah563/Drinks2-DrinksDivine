<?php include 'functions.php' ?>

<?php

if (isset($_POST['goToMenu'])) {
    header('Location: ./menu.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Checkout | Drinks Divine</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="message" style="text-align: center; margin-top: 200px;">
        <h1><i class="fa-solid fa-circle-check"></i> Order Confirmed! </h1>
        <form action="?" method="POST">
            <button type="submit" name="goToMenu" class="btn-animation" style="margin: 100px auto 0 auto;">
                    <span> Explore more d rinks </span>
            </button>
        </form>
    </div>

    <footer class="footer-yellow" style="margin-top: 180px; position: absolute; bottom: 0px; width: 100%;">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
    </footer>
</body>

</html>