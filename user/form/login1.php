<?php
$Name = $_POST['name'];
$Password = $_POST['password'];



$con = mysqli_connect('127.0.0.1', 'root', '', 'Ecomm');
$result = mysqli_query($con, "SELECT * FROM `user` WHERE ( Username ='$Name' OR Email = '$Name') AND Password = '$Password'");

session_start();
if (mysqli_num_rows($result)) {

    $_SESSION['user'] = $Name;
    echo "
    <script>
    alert('successfully Login');
    window.location.href='../index.php';
    </script>
    
    
    ";
} else {
    echo "
    <script>
    alert('incorrect email/password');
    window.location.href='login.php';
    </script>
    
    
    ";
}
