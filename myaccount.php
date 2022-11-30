<?php include 'functions.php' ?>

<?php 

if (isset($_POST['logout'])) {
    header("Location: logout.php");
}

if (isset($_POST['deleteAccount'])) {
    delete_user($_SESSION["uid"]);
    header("Location: logout.php");
}
if (isset($_POST['updateAccount'])) {
    header("Location: editdetails.php");
}

$user = [];
$user["name"] = $_SESSION["name"];
$user["email"] = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Drinksify</title>
</head>

<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>

        <section class="about-us" id="about-us">
                <div class="about-text">
                    <div class="main-text-pages">
                        <h1>My Account</h1>
                    </div>
                    <div class="user-details" style="margin: 60px auto;">
                        <p style="text-align: left;">Name: <?= $user["name"]; ?></p>
                        <p style="text-align: left;">Email Address: <?= $user["email"] ?></p>
                    </div>
                    <div class="user-buttons" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px;">
                        <form action="?" method="post">
                                <button type="submit" name="updateAccount" style="display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            width: 200px;
            height: 40px;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        <form action="?" method="post">
                            <button type="submit" name="deleteAccount" style="display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 200px;
        height: 40px;">Delete Account &nbsp;<i class="fa-solid fa-user-slash"></i></button>
                        </form>
                        <form action="?" method="post">
                            <button type="submit" name="logout" style="display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 200px;
        height: 40px;">Log Out &nbsp; <i class="fa-solid fa-arrow-right-from-bracket"></i> </button>
                        </form>
                    </div>
                </div>
            </section>

        <?php include 'footer-white.php' ?>
    </div>
</body>

</html>