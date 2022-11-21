<?php include 'functions.php' ?>

<?php

$cart = get_cart();
if (isset($cart)) {
  $drinks = get_drinks_by_ids($cart);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Cart | Drinks Divine</title>
</head>

<body>
    <?php include 'navbar.php' ?>
    
    <div class="cart">
        <h1>Cart</h1>

        <?php if (!mysqli_num_rows($drinks)) { ?>
            <h2 style="text-align: center;">! Cart is empty !</h2>
        <?php } ?>

    
        <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="explore-menu">
            <?php foreach ($drinks as $drink) { ?>
                <div class="menu-item">
                    <div class="menu-item-img">
                        <img src="img/<?= $drink['imgName'] ?>-drink.jpg" alt="" />
                    </div>
                    <div class="menu-item-details">
                        <p class="drink-name"><?= $drink['dName'] ?></p>
                        <p class="cost">£<?= $drink['dPrice'] ?></p>
                        <div class="tag tag-icon" style="width: 150px;">
                            <i class="fa-solid fa-tag tag-icon"></i> 
                            <p><?= $drink['dTag'] ?></p>
                        </div>
                    <div class="add-to-basket">
                        <form action="add-to-cart.php" method="POST">
                            <input type="hidden" name="dID" value="<?= $drink['dID'] ?>">
                            <input type="hidden" id="item-<?= $drink['dID'] ?>" name="quantity" value="<?= $cart[$drink['dID']] ?>">
                            <button class="add-to-cart" name="remove-from-cart">
                                <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                                &nbsp;Remove from Cart
                            </button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    
        <div style="margin-top: 100px;">
            <a href="checkout.php" class="btn">Total: - <?= get_total() ?>£ Checkout</a>
        </div>
        <?php } ?>
        </div>
    </div>

    <button class="go-to-menu btn-animation">
        <span>
            <a href="checkout.html"> Checkout </a>
        </span>
    </button>

    </div>
    <div class="add-to-cart-overlay">
        <p>Product Removed from Cart</p>
    </div>
    
    <footer class="footer-yellow">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
    </footer>
</body>

</html>