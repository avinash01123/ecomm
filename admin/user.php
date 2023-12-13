<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <?php
    include 'mystore.php';
    $con = mysqli_connect('127.0.0.1', 'root', '', 'Ecomm');

    // Check the connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Record = mysqli_query($con, "SELECT * FROM `user`");

    // Check if the query was successful
    if (!$Record) {
        die("Query failed: " . mysqli_error($con));
    }

    $row_count = mysqli_num_rows($Record);
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-secondary table-bordered">
                    <thead class="text-center">
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                    </thead>
                    <tbody class="text-center text-danger">
                        <?php
                        while ($row = mysqli_fetch_assoc($Record)) {
                            echo "
                                <tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['Username']}</td>
                                    <td>{$row['Email']}</td>
                                    <td>{$row['Number']}</td>
                                    <td><a href='delete.php?ID={$row['id']}' class='btn btn-outline-danger'>Delete</a></td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="col-md-2 pr-5 text-center">
                    <h3 class="text-danger">Total</h3>
                    <h1 class="bg-dark text-white"><?php echo $row_count; ?></h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
