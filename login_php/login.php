<?php
session_start();
include('../db_file/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      // Set session variables
      $_SESSION['loggedin'] = true;
      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      header('Location: /BEROEPS_2024/Ontkoking/index.php'); // Redirect to the home page
    } else {
      echo "Invalid password.";
    }
  } else {
    echo "geen gebruiker gevonden met dit email adress";
  }
}

include('../views/login_view.php');
