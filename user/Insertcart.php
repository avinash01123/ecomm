<?php
session_start();

if (isset($_SESSION['user'])) {

    // Initialize the cart session if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Handle adding products to the cart
    if (isset($_POST['addCart'])) {
        // Make sure the necessary fields are set
        if (isset($_POST['PName'], $_POST['PPrice'], $_POST['PQuantity'])) {
            $product_name = $_POST['PName'];
            $product_price = $_POST['PPrice'];
            $product_quantity = $_POST['PQuantity'];

            // Check if the product is already in the cart
            $check_product = array_column($_SESSION['cart'], 'productName');
            if (in_array($product_name, $check_product)) {
                echo "
            <script>
            alert('Product already added');
            window.location.href = 'index.php';
            </script>";
            } else {
                // Add the product to the cart
                $_SESSION['cart'][] = array('productName' => $product_name, 'productPrice' => $product_price, 'productQuantity' => $product_quantity);
                header("location:viewCart.php");
            }
        } else {
            // Handle missing POST data
            echo "Invalid request";
        }
    }

    // Remove product from the cart
    if (isset($_POST['remove'])) {
        // Make sure the necessary fields are set
        if (isset($_POST['item'])) {
            $item_to_remove = $_POST['item'];

            // Find and remove the item from the cart
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['productName'] == $item_to_remove) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header('location:viewCart.php');
                    break; // Stop the loop after removing the product
                }
            }
        } else {
            // Handle missing POST data
            echo "Invalid request";
        }
    }

    // Update product in the cart
    if (isset($_POST['update'])) {
        // Make sure the necessary fields are set
        if (isset($_POST['item'], $_POST['PName'], $_POST['PPrice'], $_POST['PQuantity'])) {
            $item_to_update = $_POST['item'];
            $updated_product_name = $_POST['PName'];
            $updated_product_price = $_POST['PPrice'];
            $updated_product_quantity = $_POST['PQuantity'];

            // Find and update the item in the cart
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['productName'] == $item_to_update) {
                    $_SESSION['cart'][$key] = array(
                        'productName' => $updated_product_name,
                        'productPrice' => $updated_product_price,
                        'productQuantity' => $updated_product_quantity
                    );
                    header("location:viewCart.php");
                    break; // Stop the loop after updating the product
                }
            }
        } else {
            // Handle missing POST data
            echo "Invalid request";
        }
    }
} else {
    header("location:./form/login.php");
}
