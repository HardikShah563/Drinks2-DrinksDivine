<?php include 'functions.php' ?>
<?php

$drinks = get_drinks();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Menu | Drinks Divine</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="menu">
        <h1>Menu</h1>

        <div class="sort-tags">
            <div class="tag">
                <i class="fa-solid fa-tag"></i>
                <p>Coctails</p>
                <i class="fa-solid fa-plus plus"></i>
            </div>
            <div class="tag">
                <i class="fa-solid fa-tag"></i>
                <p>Alcoholic</p>
                <i class="fa-solid fa-plus plus"></i>
            </div>
            <div class="tag">
                <i class="fa-solid fa-tag"></i>
                <p>Non-Alcoholic</p>
                <i class="fa-solid fa-plus plus"></i>
            </div>
        </div>

        
        <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="explore-menu">
            <?php foreach ($drinks as $drink) { ?>
                <div class="menu-item">
                    <div class="menu-item-img">
                        <img src="img/<?= $drink['imgName']?>-drink.jpg" alt="" />
                    </div>
                    <div class="menu-item-details">
                        <p class="drink-name"><?= $drink['dName'] ?></p>
                        <p class="cost">£<?= $drink['dPrice'] ?></p>
                        <div class="tag tag-icon" style="width: 150px;">
                            <i class="fa-solid fa-tag tag-icon"></i> 
                            <p><?= $drink['dTag'] ?></p>
                        </div>
                    <div class="add-to-basket" style="width: 150px;">
                    <form action="add-to-cart.php" method="POST">
                        <input type="hidden" name="dID" value="<?= $drink['dID'] ?>">
                        <button type="submit" name="add-to-cart" class="add-to-cart btn">
                            <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                            &nbsp;Add to Cart
                        </button>
                    </form>
                    </div>
                </div>
                </div>
            <?php } ?>
            </div>
        <?php } ?>
        </div>

        <button class="go-to-menu btn-animation">
            <span>
                <a target="_blank" href="cart.html">
                    Go to Cart
                </a>
            </span>
        </button>
    </div>
    
    <div class="add-to-cart-overlay">
        <p>Product Added to Cart</p>
    </div>
    <footer class="footer-yellow">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
</footer>
</body>

</html>