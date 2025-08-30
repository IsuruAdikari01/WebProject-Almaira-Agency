<?php 
require 'config.php';

$sql = "SELECT * FROM deal";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="view.css">
  <title>View Campaigns</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Campaign Name</th>
        <th>Budget</th>
        <th>Duration (days)</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>" . $row['requestID'] . "</td>
                      <td>" . $row['campaignName'] . "</td>
                      <td>" . $row['budget'] . "</td>
                      <td>" . $row['days'] . "</td>
                      <td>" . $row['description'] . "</td>
                      <td>
                          <a href='update.php?id=" . $row['requestID'] . "'><button class='update-btn'>Update</button></a>
                          <a href='delete.php?id=" . $row['requestID'] . "'><button class='delete-btn'>Delete</button></a>
                      </td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='6'>No campaigns found</td></tr>";
      }
      $con->close();
      ?>
    </tbody>
  </table>
</body>
</html>
