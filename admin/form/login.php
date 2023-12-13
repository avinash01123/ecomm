<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="" />

    <style>
        #login-form {
            width: 50%;
            margin: 5px auto;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #fb774b;

        }

        #login-form input {
            width: 50%;
            margin: 5px auto;



        }

        #login-form #login-btn {
            background-color: #fb774b;
            color: #fff;
        }

        #login-form #register-url {
            color: #fb774b;
        }
    </style>
</head>

<body>



    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto">

        </div>
        <div class="mx-auto container">
            <form action="login1.php" method="POST" id="login-form">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Name" required />
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="password" required />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn bg-dark text-white" id="login-btn" name="login" value="Login" />
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>