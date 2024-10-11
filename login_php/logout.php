<?php
session_start();
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session
header('Location: /BEROEPS_2024/Ontkoking/index.php'); // Redirect to the home page
exit();
?>