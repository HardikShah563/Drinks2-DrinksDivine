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
    
    <!-- --------------------------- -->
    <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="explore-menu">
          <?php foreach ($drinks as $drink) { ?>
            <div class="menu-item">
              <div class="menu-item-img">
                <img src="img/<?= $drink['imgName'] ?>-drink.jpg" alt="[image-name]-drink.jpg" />
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
                    <button class="add-to-cart" name="remove-from-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div style="margin-top: 100px;">
          <h2 class="btn" style="text-align: center;">Total: - £<?= get_total() ?> Checkout</h2>
        </div>
      <?php } ?>
    <!-- --------------------------- -->
    
    <?php if (mysqli_num_rows($drinks)) { ?>
      <button class="go-to-menu btn-animation">
          <span>
              <a href="./checkout.php"> Checkout </a>
          </span>
      </button>
    <?php } ?>

    </div>
      <div class="add-to-cart-overlay">
        <p>Product Removed from Cart</p>
      </div>
    </div>
    
    <?php if (mysqli_num_rows($drinks)) { ?>
      <?php include 'footer-yellow.php' ?>
    <?php } else {?>
      <footer class="footer-yellow" style="margin-top: 180px; position: absolute; bottom: 0px; width: 100%;">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
      </footer>
    <?php } ?>
</body>

</html>