<?php
session_start();

// Include your header and any necessary functions
include "header.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process the order (you need to implement this logic)
    $name = $_POST["name"];
    $address = $_POST["address"];
    $cardNumber = $_POST["card_number"];
    $expiryDate = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];

    // Example: Save order details to a database or send them to a payment gateway

    // Clear the shopping cart
    unset($_SESSION["cart"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add your custom styles here */
        .checkout-form {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }

        .checkout-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-dark mb-5 rounded">
                <h1 class="text-white">Checkout</h1>
            </div>
        </div>
    </div>

    <div class="container checkout-form">
        <form action='checkout.php' method='POST' id="cartForm">
            <h2>Shipping Information</h2>

            <!-- Add your form fields for shipping information -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <h2>Payment Information</h2>

            <!-- Add your form fields for payment information -->
            <div class="mb-3">
                <label for="card-number" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="card-number" name="card_number" required>
            </div>


            <button type="submit" class="bg-dark" name="placeOrder" form="cartForm">
                <a href="payment.php" class="text-decoration-none text-white" >Place Order</a>
            </button>
        </form>
    </div>

</body>

</html>