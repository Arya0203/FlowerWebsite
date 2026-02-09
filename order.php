<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$bouquet = $_POST['bouquet'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

$query = "INSERT INTO orders (name, phone, bouquet, quantity, address)
          VALUES ('$name', '$phone', '$bouquet', '$quantity', '$address')";

if (mysqli_query($conn, $query)) {
    echo "<h2>Order Placed Successfully 🌸</h2>";
    echo "<a href='index.html'>Go Home</a>";
} else {
    echo "Error occurred";
}
?>
