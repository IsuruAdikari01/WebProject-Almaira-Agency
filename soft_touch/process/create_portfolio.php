<?php require_once(__DIR__ . "/../config/config.php"); ?>

<?php

// Get form data
$title = $_POST['title']; 
$type = $_POST['type'];
$date = $_POST['date'];
$description = $_POST['description'];

// Build the query to insert portfolio data
$query = "INSERT INTO portfolios (`title`, `type`, `date`, `description`)
          VALUES ('$title', '$type', '$date', '$description')";

// Execute the query and handle success or failure
if ($conn->query($query) === TRUE) {
    // Redirect to the portfolio list page with a success message
    header('Location: ' . BASEURL . '/all_portfolio.php');
    // header('location: '.BASEURL."?portfolio_create=success");
} else {
    // Output an error message if the query fails
    echo "Error inserting portfolio record: " . $conn->error;
}

?>