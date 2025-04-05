<?php
session_start();
include "php/connection.php";

// Define validate function outside the conditional block
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; // Fixed typo: 'data' to '$data'
}

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)){
        header("Location: login.php?error=Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = '$email' and password= '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email && $row['password'] === $pass){
            echo "Logged in";
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['username'] = $row['username'];
            header("Location: adminn.php");
            exit();
        }
        else{
            header("Location: login.php?error=Incorrect email or password");
            exit();
        }
    }
    else{
        header("Location: login.php?error=Incorrect email or password");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();
}
?>
