<?php 
require_once(__DIR__ . "/../config/config.php"); 

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title']; 
        $type = $_POST['type'];
        $date = $_POST['date'];
        $description = $_POST['description']; 

        // Build the update query
        $query = "UPDATE portfolios
                  SET title = '$title',
                      type = '$type',
                      date = '$date',
                      description = '$description'
                  WHERE id = $id";  // Removed the comma before WHERE

        // Execute the query and check for success
        if ($conn->query($query) === TRUE) {
            // Redirect to the portfolio list page after successful update
            $_SESSION['message'] = 'Record update successfully!';
            header('Location: ' . BASEURL . '/all_portfolio.php?portfolio_update=success');
            // exit();
        } else {
            // Output an error message if the query fails
            echo "Error updating record: " . $conn->error;
        }
    }
} else {
    echo "No ID provided.";
    exit;
}
?>
