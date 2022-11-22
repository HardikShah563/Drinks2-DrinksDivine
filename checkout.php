<?php include 'functions.php' ?>

<?php
// If user doesn't have anything in the cart or he does not hold an account or he has not logged in! In such cases the user is not allowed to make the purchase 

// Check statement to check if the user has logged in or not! 
if (!$_SESSION["uid"]) {
    header('Location: ./login.php');
}

// Check statement to check if the user has pressed the checkout button and filled all the details
if (isset($_POST['checkout'])) {
    $checkout = $_POST;
    $cart = get_cart();
    if (!empty($cart)) {
        $checkout['uid'] = $_SESSION["uid"];
        $checkout['name'] = $_POST["name"];
        $checkout['email'] = $_POST["email"];
        $checkout["total"] = get_total();
        $checkout["drinks"] = json_encode($cart, true);
        $checkout = checkout($checkout);
        if (!$checkout) {
            $response = [
                'type' => 'error',
                'message' => 'Checkout Failed!'
            ];
        } else {
            $response = [
                'type' => 'success',
                'message' => 'Checkout Successful',
            ];
            empty_cart();
            sleep(1);
            header('Location: ./confirmation.php');
        }
    } else {
        header('Location: ./index.php');
    }
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

    <!-- <section class="order-details">
        <h1>Checkout</h1>
        <hr>
        <div class="checkout-product">
            <div class="product-info">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="product-cost">
                <h2>$500</h2>
            </div>
        </div>
        <div class="checkout-product">
            <div class="product-info">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="product-cost">
                <h2>$450</h2>
            </div>
        </div>
        <hr>
        <div class="checkout-product">
            <div class="product-info">
                <h3>Total</h3>
            </div>
            <div class="product-cost">
                <h2>$950</h2>
            </div>
        </div>
    </section> -->

    <h1 style="margin: 100px 0 20px 0; text-align: center;">Checkout Details</h1>
    <h4 style="margin: 0 0 50px 0; text-align: center;">Fill in the details to finish the checkout procedure</h4>

    <?php if (isset($response)) { ?>
        <div class="message-box <?= $response['type'] ?>" style="text-align: center;">
            <p><?= $response['message'] ?></p>
        </div>
    <?php } ?>
        
    <section class="checkout-form">
        <form action="?" method="POST">
            <h3>Personal Details: </h3>
            <hr>
            <input type="text" name="name" placeholder="Full Name" required>
            <div class="grouping">
                <input type="number" name="phno" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <!-- Personal Details Inputs over -->
            
            <h3>Shipping Address: </h3>
            <hr>
            <div class="grouping">
                <input type="text" name="address1" placeholder="Flat No. / Building Name" required>
            </div>
            <div class="grouping">
                <input type="text" name="address2" placeholder="Road Number / Area / Colony" required>
            </div>
            <div class="grouping">
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="state" placeholder="State" required>
                <input type="number" name="pincode" placeholder="Pincode" required>
            </div>
            <div class="grouping">
                <input type="text" name="address3" placeholder="Nearby Location (optional)">
            </div>
            <!-- Shipping Details Inputs over -->

            <h3>Card Details: </h3>
            <hr>
            <div class="grouping">
                <input type="text" name="card-holder" id="card-holder" placeholder="Card Holder" required>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="grouping">
                <input type="number" name="card-number" id="card-number" placeholder="Card Number" required>
                <input type="number" name="CVV" id="CVV" placeholder="CVV" required>
            </div>

            <div style="margin: 20px;">
                <h2 class="btn" style="text-align: center;">Total: - £<?= get_total() ?> Checkout</h2>
            </div>
            
            <button type="submit" name="checkout" class="btn-animation">
                <span> Proceed </span>
            </button>
        </form>
    </section>

    <?php include 'footer-yellow.php' ?>
</body>

</html>