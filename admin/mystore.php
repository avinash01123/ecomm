<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php
session_start();


if (!$_SESSION['admin']) {
    header('location:form/login.php');
}






?>

<body>

    <nav class="navbar navbar-light bg-dark p-2">

        <div class="container-fluid text-white">
            <a href="" class="navbar-brand text-white">
                <h1>Ecom</h1>
            </a>
            <span>
                <i class="fa-solid fa-user-tie"></i>
                Hello,<?php echo $_SESSION['admin']; ?>
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
                <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
            </span>
        </div>
    </nav>

    <div>
        <h2 class="text-center">Dashboard</h2>
    </div>

    <div class=" col-md-6 bg-dark text-center m-auto">
        <a href="product/index.php" class=" text-white text-decoration-none fs-4 fw-bold">Add Post</a>
        <a href="user.php" class=" text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>