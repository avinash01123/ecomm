<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'Ecomm');

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $Dup_username = mysqli_prepare($con, "SELECT * FROM `user` WHERE Username = ?");
    mysqli_stmt_bind_param($Dup_username, "s", $Name);
    mysqli_stmt_execute($Dup_username);
    mysqli_stmt_store_result($Dup_username);

    $Dup_Email = mysqli_prepare($con, "SELECT * FROM `user` WHERE Email = ?");
    mysqli_stmt_bind_param($Dup_Email, "s", $Email);
    mysqli_stmt_execute($Dup_Email);
    mysqli_stmt_store_result($Dup_Email);

    if (mysqli_stmt_num_rows($Dup_Email) > 0) {
        echo "
        <script>
        alert('This Email is already taken');
        window.location.href='register.php';
        </script>";
    } elseif (mysqli_stmt_num_rows($Dup_username) > 0) {
        echo "
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>";
    } else {
        $insert_query = mysqli_prepare($con, "INSERT INTO `user`(`Username`, `Email`, `Number`, `Password`) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($insert_query, "ssss", $Name, $Email, $Number, $Password);
        mysqli_stmt_execute($insert_query);

        echo "
        <script>
        alert('Registration successful');
        window.location.href='login.php';
        </script>";
    }

    // Close prepared statements
    mysqli_stmt_close($Dup_username);
    mysqli_stmt_close($Dup_Email);
    mysqli_stmt_close($insert_query);
}

// Close database connection
mysqli_close($con);
?>
