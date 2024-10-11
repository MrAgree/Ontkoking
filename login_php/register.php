<?php
session_start();
include('../db_file/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input and sanitize
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['registration_error'] = "Invalid email format.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/register.php'); // Redirect back to registration page
        exit();
    }

    // Check if email already exists
    $checkEmailSql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailSql);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registration_error'] = "Email already exists. Please use a different email.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/register.php');
        exit();
    }

    // Validate password strength
    if (strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        $_SESSION['registration_error'] = "Password must be at least 8 characters long and include both letters and numbers.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/register.php');
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

    // Insert user into the database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";
    if (mysqli_query($conn, $sql)) {
        // Registration successful, set success message
        $_SESSION['registration_success'] = "Registration successful. You can now log in!";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn); 
    }
}
