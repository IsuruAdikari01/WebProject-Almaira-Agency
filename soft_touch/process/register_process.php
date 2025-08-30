<?php require_once(__DIR__ . "/../config/config.php"); ?>

<?php
$fname = $_POST['firstname']; 
$lname = $_POST['lastname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = md5($_POST['password']); // Use secure hashing like password_hash instead of md5 in production
$userrole = 'user';
$gender = $_POST['gender'];
$description = $_POST['description'];

// Validate that the birthday field is not empty
if (empty($birthday)) {
    // Handle the error appropriately
    echo "Error: Birthday is required.";
    exit; // Stop further execution
}

// Prepare the query
$query = "INSERT INTO users (`first_name`, `last_name`, `email`, `birth_day`, `password`, `user_role`, `gender`, `description`)
VALUES ('$fname', '$lname', '$email', '$birthday', '$password', '$userrole', '$gender', '$description')";  

if ($conn->query($query) === TRUE) {
    // Redirect to success page
    header('location: ' . BASEURL . "?user_reg=success");
} else {
    echo "Error inserting records: " . $conn->error;
}
?>
