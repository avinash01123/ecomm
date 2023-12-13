<?php

if (isset($_POST['insert_product'])) {
    include 'config.php';

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $productImage = Null;
    if (isset($_FILES['product_image1'])) {
        $uploadDir = 'images/';
        $filename = uniqid() . "-" . basename($_FILES['product_image1']['name']);
        $uploadFile = $uploadDir . $filename;
        if (move_uploaded_file($_FILES['product_image1']['tmp_name'], $uploadFile)) {
            $productImage = $uploadFile;
        }
    }



    // if ($product_name == '' or $product_price == '' or $product_image1 == '') {
    //     echo "<script>alert('Please fill all the available fields')</script>";
    //     exit();
    // } else {
    //     move_uploaded_file($product_image1, "./product_images/$product_image1");

    //     $insert_products = "insert into `products` (product_name, product_image1,product_price,) values(' $product_name', '$product_image1 ' , $product_price', NOW(),)";

    //     $result_query=mysqli_query($con,$insert_products);
    //     if($result_query){
    //         echo "<script>alert('Product added successfully')</script>";
    //     }
    // }



    // insert product

    mysqli_query($con, "INSERT INTO `products`( `PName`, `PPrice`, `PImage`) VALUES ('$product_name','$product_price','$productImage')");
    header("Location: ./index.php");
}

?>


<!-- feetch data -->