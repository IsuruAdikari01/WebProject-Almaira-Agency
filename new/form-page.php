<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="create.css">
  <title>Request Ad Campaign</title>
</head>
<body>
  <form action="insert.php" method="POST">
    <label for="campaign-name">Campaign Name:</label>
    <input type="text" id="campaign-name" name="campaign_name" required>

    <label for="budget">Budget:</label>
    <input type="number" id="budget" name="budget" required>

    <label for="duration">Campaign Duration (days):</label>
    <input type="number" id="duration" name="duration" required>

    <label for="description">Campaign Description:</label>
    <textarea id="description" name="description" cols="30" rows="30" required></textarea>

    <button type="submit">Submit Request</button>
  </form>
</body>
</html>
