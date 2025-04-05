<?php
// Check if POST data exists
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["orderId"]) && isset($_POST["orderStatus"])) {
    // Include database connection
    include_once "../config/dbconnect.php";

    // Sanitize input
    $orderId = mysqli_real_escape_string($conn, $_POST["orderId"]);
    $newStatus = mysqli_real_escape_string($conn, $_POST["orderStatus"]);

    // Update order status in the database
    $sql = "UPDATE orderd SET order_status = '$newStatus' WHERE id = '$orderId'";
    if ($conn->query($sql) === TRUE) {
        // Order status updated successfully
        echo "Order status updated successfully";
    } else {
        // Error updating order status
        echo "Error updating order status: " . $conn->error;
    }

    // Close database connection
    $conn->close();

} else {
    // Invalid request
    echo "Invalid request";
}
?>
