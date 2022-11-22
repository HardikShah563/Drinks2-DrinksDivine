<?php include 'functions.php' ?>

<?php
session_start();

unset($_SESSION["uid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);

empty_cart();

header("Location: login.php");
