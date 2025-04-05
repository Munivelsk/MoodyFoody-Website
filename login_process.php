<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "moodyfoody";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute query
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($_POST['password'] == $user['password']) {

            // Start session and set session variables
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $user['email'];
            $_SESSION["name"] = $user['name'];

            // Redirect to menu page
            header("location: menu.php");
            exit;
        } else {
            echo "<p>Invalid password.</p>";
        }
    } else {
        echo "<p>Invalid email.</p>";
    }

    // Close connection
    $conn->close();
}
?>
