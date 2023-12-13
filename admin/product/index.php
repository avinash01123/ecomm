<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>






    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>

        <form action="./insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product Name" autocomplete="off" required />
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required />
            </div>




            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required />
            </div>

            <!-- <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Select Page Features</label>
                <select name="" id="" class="form-select" name="Pages">
                    <option value="Home">Home</option>
                    <option value="Best">Best Products</option>
                    <option value="Discount">Discount Products</option>
                </select>
            </div> -->

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" id="insert_product" class=" btn bg-dark text-white mb-3 px-3
                " value="Insert Product" />
            </div>

        </form>

        <div class="container ">
            <div class="row">
                <div class="col-md-8 m-auto">

                    <table class="table border border-warning table-hover my-5">
                        <thead class="bg-dark text-white fs-4 font-monospace text-center">
                            <th>id</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Image</th>

                            <th>Delete</th>






                        </thead>





                        <tbody class="text-center">
                            <?php
                            include 'config.php';
                            $Record = mysqli_query($con, "SELECT * FROM `products` ");


                            while ($row = mysqli_fetch_array($Record)) {
                                echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[PName]</td>
                    <td>$row[PPrice]</td>
                    <td><img src='$row[PImage]' height='90px' width='200px'></td>

                    <td><a href='delete.php?ID={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?ID={$row['id']}' class='btn btn-warning'>Update</a></td>








    
    
                </tr>
    
                    
                    
                    ";
                            }




                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>