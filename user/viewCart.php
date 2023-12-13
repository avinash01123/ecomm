<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    session_start();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-dark mb-5 rounded">
                <h1 class="text-white">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <form action='Insertcart.php' method='POST'>
                    <table class="table table-bordered text-center">
                        <thead class="bg-danger text-white fs-5">
                            <th>Index no.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <?php
                            $totalPrice = 0; // Initialize total price
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    // Ensure that productPrice and productQuantity are treated as numbers
                                    $productPrice = (float) $value['productPrice'];
                                    $productQuantity = (int) $value['productQuantity'];

                                    // Calculate total price for each item
                                    $total = $productPrice * $productQuantity;
                                    $totalPrice += $total; // Add to the overall total

                                    echo "
                                    <tr>
                                        <td>{$key}</td>
                                        <td><input type={$value['productName']}</td>
                                        <td>{$productPrice}</td>
                                        <td>{$productQuantity}</td>
                                        <td>{$total}</td>
                                        <td><button name='update' class='btn-warning'>Update</button></td>
                                        <td>
                                            <input type='hidden' name='item' value='{$value['productName']}'>
                                            <button name='remove' class='btn-danger'>Delete</button>
                                        </td>
                                    </tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                    <div class="text-end">
                        <p>Total Price: $<?php echo $totalPrice; ?></p>
                        <button type="submit" class="bg-dark"><a href="checkout.php" class="text-decoration-none text-white">Checkout</a> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>