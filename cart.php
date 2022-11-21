<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Drinks Divine</title>
    <!-- Including Style Sheet-->
    <link rel="stylesheet" href="../style/style.css">
    <!-- Including Icons -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <!-- Including Javascript File -->
    <script src="../script/app.js" defer></script>
    <script src="../script/menu.js" defer></script>
</head>

<body>
    <?php include 'navbar.php' ?>
    
    <div class="cart">
        <h1>Cart</h1>

        <div class="explore-menu">
            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/blue-drink.jpg" alt="Blue Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/red-drink.jpg" alt="Golden Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/golden-drink.jpg" alt="Green Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/green-drink.jpg" alt="Green Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/orange-drink.jpg" alt="Green Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-img">
                    <img src="../img/white-drink.jpg" alt="Green Drink">
                </div>
                <div class="menu-item-details">
                    <p class="drink-name">Blue Scotch</p>
                    <p class="cost">$500</p>
                    <button class="add-to-cart">
                        <i class="fa-solid fa-bag-shopping add-to-cart"></i>
                        &nbsp;Remove from Cart
                    </button>
                </div>
            </div>
        </div>

        <button class="go-to-menu btn-animation">
            <span>
                <a href="checkout.html">
                    Checkout
                </a>
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