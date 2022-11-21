<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks Divine</title>
    <!-- Including Style Sheet-->
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/style.css">
    <!-- Including Icons -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <!-- Including Javascript File -->
    <script src="./script/app.js" defer></script>
</head>

<body>
    <?php include 'navbar.php' ?>

    <section class="contact-section" id="contact-section" name="contact">
        <div class="contact-page">
            <div class="contact-form">
                <h1>Contact Us</h1>
                <form action="mailto:beverrinks@gmail.com" method="post" enctype="text/plain">
                    <input type="text" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="subject" placeholder="Subject" required>
                    <textarea name="message" id="message" cols="20" rows="5" placeholder="Message" required></textarea>
                    <button class="btn-animation">
                        <span>
                            <a target="_blank" href="#"> Send Message </a>
                        </span>
                    </button>
                </form>
            </div>
            <div class="contact-info">
                <div class="contact-info-box">
                    <i class="fa-solid fa-location-dot"></i>
                    <p id="address">Mumbai, India</p>
                </div>
                <div class="contact-info-box">
                    <i class="fa-solid fa-phone"></i>
                    <p><a href="tel://+91-0000000000">+91 00000 00000</a></p>
                </div>
                <div class="contact-info-box">
                    <i class="fa-solid fa-envelope"></i>
                    <p><a href="#">someone@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-white">
        <p id="copyrights">&copy; Copyright Drinks Divine | All Rights Reserved</p>
</footer>
</body>

</html>