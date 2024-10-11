<?php
session_start();
include('../db_file/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize user input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Insert user into the database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        // Registration successful, set success message
        $_SESSION['registration_success'] = " Registration successful. You can now log in!";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
