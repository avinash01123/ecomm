<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto  shadow font-monospace  border border-info">
                <p class=" text-center fs-3 fw-bold my-3 ">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name" placeholder="Enter User name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">UserEmail:</label>
                        <input type="email" name="email" id="" placeholder="Enter User Email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">UserNumber:</label>
                        <input type="number" name="number" id="" placeholder="Enter User number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">UserPassword:</label>
                        <input type="password" name="password" id="" placeholder="Enter User password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="bg-dark text-white w-100 fs-4 ">Register</button>

                    </div>
                    <div class="mb-3">
                        <button class="bg-dark text-white w-100 fs-4 "><a href="login.php" class="text-decoration-none text-white">AlREADY ACCOUNT</a></button>

                    </div>
                </form>

            </div>
        </div>
    </div>


</body>

</html>