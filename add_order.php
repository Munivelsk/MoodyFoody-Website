<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    // Connect to your database (replace host, username, password, and dbname with your actual database credentials)
    include('php\connection.php');

    $username = $_SESSION['username'];
    $date = date("Y-m-d");
    $time = date("H:i");
    $order_status = "preparing";

    // Loop through the submitted cart items
    foreach ($_POST['cartItems'] as $cartItem) {
        // Retrieve the item name and price from the form data
        $food = $conn->real_escape_string($cartItem['name']);
        $price = $cartItem['price'];

        // Insert the cart item into the database
        $sql = "INSERT INTO orderd (username, food, price, date, time, order_status) VALUES ('$username', '$food', '$price', '$date', now(), '$order_status')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close the database connection
    $conn->close();

    header("Location: menu.php");
    exit();
}
?>
