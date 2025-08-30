<?php 
require_once(__DIR__ . "/../config/config.php"); 

session_start(); // Start the session

$id = $_GET['id'];

$query = "DELETE FROM portfolios WHERE id = $id";

if ($conn->query($query) === TRUE) {
    // Set a success message in the session
    $_SESSION['message'] = 'Record deleted successfully!';
    header('Location: ' . BASEURL . '/all_portfolio.php');
    exit(); // Ensure no further code is executed
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
