<?php
session_start();
include('../db_file/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input and sanitize
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['login_error'] = "Invalid email format.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php'); // Redirect back to login page
        exit();
    }

    // Check if email and password fields are not empty
    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = "Email and password are required.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php');
        exit();
    }

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('Location: /BEROEPS_2024/Ontkoking/index.php'); // Redirect to the home page
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid password.";
            header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php'); // Redirect back to login page
            exit();
        }
    } else {
        $_SESSION['login_error'] = "No user found with this email address.";
        header('Location: /BEROEPS_2024/Ontkoking/login_php/login.php'); // Redirect back to login page
        exit();
    }
}

include('../views/login_view.php');
