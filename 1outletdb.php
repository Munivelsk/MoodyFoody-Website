<?php
// PHP code starts here

// Check if form is submitted
    // Validate input (you can add more validation if needed)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $item = $_POST['food'];
    $price = $_POST['price'];

    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moodyfoody";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into orders table
    $sql = "INSERT INTO orders (customer_name, email, food, price)
    VALUES ('$name', '$email', '$item', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        header("Location:outlet1_menu.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>