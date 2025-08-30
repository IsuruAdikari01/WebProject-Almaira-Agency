<?php
session_start();

// Check if logout is requested
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'logout') {
    // Unset all session variables
    $_SESSION = [];

    // Destroy the session
    session_destroy();

    // Return a success response
    echo "Logged out";
    exit;
}
?>
