<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>

    <?php
    include 'header.php';
    ?>

    <!-- Include Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .modal-img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h1 class="text-dark font monospace my-3">Products</h1>
                <?php
                include 'config.php';
                $Record = mysqli_query($con, "SELECT * FROM `products` ");
                while ($row = mysqli_fetch_array($Record)) {
                    echo "
                    <div class='col-md-6 col-lg-4 m-auto mb-3'>
                        <form action ='Insertcart.php' method='Post'>
                            <div class='card m-auto' style='width: 18rem;'>
                                <!-- Add data-toggle and data-target for Bootstrap modal -->
                                <img src='../admin/product/$row[PImage]' class='card-img-top' alt='...' data-toggle='modal' data-target='#myModal$row[ID]'>
                                <div class='card-body text-center '>
                                    <h5 class='card-title text-dark fs-4 fw-bold '>$row[PName]</h5>
                                    <p class='card-text text-dark fw-bold fs-4'>RS:$row[PPrice]</p>
                                    <input type='hidden' name='PName' value='$row[PName]'>
                                    <input type='hidden' name='PPrice' value='$row[PPrice]'>
                                    <input type='number' name='PQuantity' value='min=1' max='20' placeholder='Quantity'> <br> <br>
                                    <input type='submit' name ='addCart' class='btn btn-dark text-white w-100' value='Add to Cart'>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Bootstrap Modal -->
                        <div class='modal fade' id='myModal$row[ID]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-body'>
                                        <img src='../admin/product/$row[PImage]' class='modal-img'>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php'
    ?>
</body>

</html>