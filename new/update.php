<?php
require 'config.php';

// Retrieve campaign details if a requestID is provided via GET method
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM deal WHERE requestID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        exit();
    }

    $stmt->close();
}

// Update the campaign details if form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $campaign = $_POST['campaign_name'];
    $budget = $_POST['budget'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    $sql = "UPDATE deal SET campaignName = ?, budget = ?, days = ?, description = ? WHERE requestID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sdisi", $campaign, $budget, $duration, $description, $id);

    if ($stmt->execute()) {
        echo "Update successful";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();

    // Redirect to read.php after successful update
    header("Location: view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="update.css">
  <title>Update Campaign</title>
</head>
<body>
  <form action="update.php" method="POST">

    <label for="campaign-name">Campaign Name:</label>
    <input type="text" id="campaign-name" name="campaign_name" value="<?php echo htmlspecialchars($row['campaignName']); ?>" required>

    <label for="budget">Budget:</label>
    <input type="number" id="budget" name="budget" value="<?php echo htmlspecialchars($row['budget']); ?>" required>

    <label for="duration">Campaign Duration (days):</label>
    <input type="number" id="duration" name="duration" value="<?php echo htmlspecialchars($row['days']); ?>" required>

    <label for="description">Campaign Description:</label>
    <textarea id="description" name="description" cols="30" rows="10" required><?php echo htmlspecialchars($row['description']); ?></textarea>

    <button type="submit">Update Campaign</button>
  </form>
</body>
</html>
