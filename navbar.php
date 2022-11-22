<section class="nav">
        <nav>
            <div class="nav-lines">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <div class="logo">
                <label>Drinks Divine</label>
            </div>
            <div class="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./menu.php">Menu</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li class="nav-grey-line">|</li>
                
                <li><a href="./cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                
                <?php if (isset($_SESSION['uid'])) { ?>
                        <li><a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    <?php } else { ?>
                        <li><a href="./login.php"><i class="fa-regular fa-user"></i></a></li>
                    <?php } ?>
            </div>
        </nav>
    </section>