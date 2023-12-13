<?php
echo $Id = $_GET['ID'];
include 'config.php';


mysqli_query($con, "DELETE FROM `products` WHERE id = $Id");
header("Location: index.php");
