<?php
include '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    // Sanitize input
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $stock = mysqli_real_escape_string($connection, $_POST['stock']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);

echo $id;
echo $name;
echo $price;
echo $stock;
echo $category;
}

// Close the database connection
mysqli_close($connection);
?>
