<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .add-to-cart {
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moodyfoody";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch food items from the database
$sql = "SELECT * FROM outlet_menu";
$result = $conn->query($sql);

// Display food items by category
if ($result->num_rows > 0) {
    $categories = [];
    while ($row = $result->fetch_assoc()) {
        $category = $row["category"];
        if (!isset($categories[$category])) {
            $categories[$category] = [];
        }
        $categories[$category][] = $row;
    }

    // Display food items in a table
    foreach ($categories as $category => $items) {
        echo "<h2>$category</h2>";
        echo "<table>";
        echo "<tr><th>Food Name</th><th>Price</th><th>Action</th></tr>";
        foreach ($items as $item) {
            echo "<tr>";
            echo "<td>{$item['food_name']}</td>";
            echo "<td>{$item['price']}</td>";
            echo "<td><button class='add-to-cart' data-id='{$item['food_id']}'>+</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- Cart section -->
<h2>Cart</h2>
<div id="cart"></div>

<script>
    // Function to add item to cart
    function addToCart(foodId) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cart").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "add_to_cart.php?food_id=" + foodId, true);
        xhttp.send();
    }

    // Function to remove item from cart
    function removeFromCart(foodId) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cart").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "remove_from_cart.php?food_id=" + foodId, true);
        xhttp.send();
    }

    // Add event listener to + buttons
    var addToCartButtons = document.getElementsByClassName('add-to-cart');
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener('click', function() {
            var foodId = this.getAttribute('data-id');
            addToCart(foodId);
        });
    }
</script>

</body>
</html>
