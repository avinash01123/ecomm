<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin-bottom: 80px;
            /* Add space for the footer */
        }

        .navbar {
            margin-bottom: 20px;
            /* Add margin at the bottom of the navbar */
        }

        .search-form {
            margin-right: 10px;
            /* Add margin to the right of the search bar */
        }

        .navbar-links {
            margin-left: auto;
            /* Move the links to the right */
        }

        .navbar-links a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            margin-right: 10px;
            transition: color 0.3s ease;
        }

        .navbar-links a i:hover {
            color: yellow;
        }

        .navbar-brand {
            margin-right: 15px;
            /* Add margin to the right of the brand */
        }

        .navbar-logo img {
            max-height: 50px;
            /* Adjust the max-height of the logo */
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

        .carousel {
            margin-bottom: 20px;
            /* Add margin at the bottom of the carousel */
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>

    <nav class="navbar navbar-light bg-dark p-2">
        <div class="container-fluid font-monospace">
            <div class="navbar-logo">
                <a href="" class="navbar-brand text-white pb-2">
                    <img src="../img/ecom.png" alt="Your Logo">
                </a>
            </div>
            <form class="search-form d-flex me-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-search"></i></button>
            </form>
            <div class="navbar-links">
                <a href="index.php" class="text-decoration-none text-white active"><i class="fa-solid fa-house" style="color: yellow;"></i> Home</a>
                <a href="viewCart.php" class="text-decoration-none text-white"><i class="fa-solid fa-cart-shopping"></i> Cart(<?php echo $count ?>)</a>
                <span class="text-white">
                    <i class="fa-solid fa-user-tie"></i> Hello
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user'];
                        echo "
                    <a href='./form/logout.php' class='text-decoration-none text-white'><i class='fa-solid fa-right-from-bracket'></i>
                    Logout</a>";
                    } else {
                        echo "<a href='./form/login.php' class='text-decoration-none text-white'><i class='fa-solid fa-right-from-bracket'></i>
                        Login</a>";
                    }
                    ?>
                    <a href="../admin/mystore.php" class="text-decoration-none text-white">Admin</a>
                </span>
            </div>
        </div>
    </nav>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../img/ecom.png" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../img/hi.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img_mountains_wide.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>


</body>

</html>