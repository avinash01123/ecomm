<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    $id = $_GET['ID'];
    include 'config.php';

    $Record = mysqli_query($con, "SELECT * FROM `products` WHERE id= $id");
    $data = mysqli_fetch_array($Record);
    ?>

    <div class="container mt-3">
        <h1 class="text-center">Products Update</h1>

        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" value="<?php echo $data['PName'] ?>" name="product_name" id="product_name"
                    class="form-control" placeholder="Enter Product Name" autocomplete="off" required />
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Price</label>
                <input type="text" value="<?php echo $data['PPrice'] ?>" name="product_price" id="product_price"
                    class="form-control" placeholder="Enter Product Price" autocomplete="off" required />
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required /><br>
                <img src="<?php echo $data['PImage'] ?> " alt="" style="height:100px;">
            </div>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="updat" class="btn bg-dark text-white mb-3 px-3" value="Update" />
            </div>
        </form>
    </div>

    <!-- PHP update -->
    <?php
    if (isset($_POST['updat'])) {
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        $productImage = null;
        if (isset($_FILES['product_image1']) && $_FILES['product_image1']['error'] == 0) {
            $uploadDir = 'images/';
            $filename = uniqid() . "-" . basename($_FILES['product_image1']['name']);
            $uploadFile = $uploadDir . $filename;
            if (move_uploaded_file($_FILES['product_image1']['tmp_name'], $uploadFile)) {
                $productImage = $uploadFile;
            }
        }

        include 'config.php';

        // Use prepared statement to prevent SQL injection
        $query = "UPDATE `products` SET `PName`=?, `PPrice`=?, `PImage`=? WHERE id = ?";
        $stmt = mysqli_prepare($con, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssi", $product_name, $product_price, $productImage, $id);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            header("location:index.php");
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }

        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
