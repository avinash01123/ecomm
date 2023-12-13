<?php
if (isset($_GET['ID'])) {
    $userId = intval($_GET['ID']);

    // Create a database connection
    $con = mysqli_connect('127.0.0.1', 'root', '', 'Ecomm');

    // Check the connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "DELETE FROM `user` WHERE id = ?");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $userId);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Close the connection
    mysqli_close($con);

    // Redirect back to the user.php page
    header("location: user.php");
    exit();
} else {
    echo "Invalid user ID.";
}
