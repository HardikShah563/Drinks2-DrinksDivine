<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Checkout | Drinks Divine</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <section class="order-details">
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
    </section>

    <section class="checkout-form">
        <form>
            <h3>Personal Details: </h3>
            <hr>
            <div class="grouping">
                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" required>
                <input type="text" name="LastName" id="LastName" placeholder="Last Name" required>
            </div>
            <div class="grouping">
                <input type="number" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" required>
                <input type="email" name="EmailId" id="EmailId" placeholder="Email Address" required>
            </div>

            <h3>Shipping Address: </h3>
            <hr>
            <div class="grouping">
                <input type="text" name="Address1" id="Address1" placeholder="Flat No. / Building Name" required>
            </div>
            <div class="grouping">
                <input type="text" name="" id="" placeholder="Road Number / Area / Colony" required>
            </div>
            <div class="grouping">
                <input type="text" name="City" id="City" placeholder="City" required>
                <input type="text" name="State" id="State" placeholder="State" required>
                <input type="number" name="Pincode" id="Pincode" placeholder="Pincode" required>
            </div>
            <div class="grouping">
                <input type="text" name="nearby-location" id="nearby-location" placeholder="Nearby Location (optional)">
            </div>

            <button class="btn-animation">
                <span>
                    <a target="_blank" href="#"> Save Information </a>
                </span>
            </button>
        </form>

        <form>
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
            
            <button class="btn-animation">
                <span>
                    <a target="_blank" href="#"> Proceed </a>
                </span>
            </button>
        </form>
    </section>

    <?php include 'footer-yellow.php' ?>
</body>

</html>