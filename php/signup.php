<?php      
include('connection.php');  

// Retrieve form data
$username = $_POST['name'];
$email = $_POST['email'];  
$password = $_POST['password'];
$phone = $_POST['phone'] ;

// Validate password and phone number
if (strlen($password)<6) {
    echo "Error: Password must be between 6 and 12 characters long and contain only letters and digits.";
    exit();
}

if (!preg_match('/^\d{10}$/', $phone)) {
    echo "Error: Phone number must be 10 digits long.";
    exit();
}

// Check for duplicate email or phone number
$sql = "SELECT * FROM users WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Error: Email or phone number already exists.";
    exit();
}

// Insert user into the database
$sql = "INSERT INTO users(username, email, password, phone) VALUES ('$username', '$email', '$password', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "User created successfully, Thank you for signing up :)";
} else {
    echo "Error creating user: Try with diffrent email or phone number";
}

?>
