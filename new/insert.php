<?php 

require 'config.php';

$campaign = $_POST['campaign_name'];
$price = $_POST['budget'];
$day = $_POST['duration'];
$des = $_POST['description'];

$stmt = $con->prepare("INSERT INTO deal (campaignName, budget, days, description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdis", $campaign, $price, $day, $des);

if ($stmt->execute()) {
    header('location: view.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();


?>