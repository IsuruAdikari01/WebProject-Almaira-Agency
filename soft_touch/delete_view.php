<?php

require_once(__DIR__ . "/config/config.php");

$id = $_GET['id'];

$query = "SELECT * FROM portfolios WHERE id=$id";

$data = $conn->query($query);


$row = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: red;
        }
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General body styling */
        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #333;
        }

        .navbar .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            transition: background-color 0.3s;
        }

        .nav-links li a:hover {
            background-color: #555;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Portfolio</h2>
        <form method="POST" action="<?php echo BASEURL ?>/process/delete_port.php?id=<?php echo $row['id']; ?>">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

            <label for="type">Type</label>
            <select id="type" name="type" required>
                <option value="">Select Type</option>
                <option value="Web Development" <?php echo ($row['type'] == 'Web Development') ? 'selected' : ''; ?>>Web Development</option>
                <option value="Graphic Design" <?php echo ($row['type'] == 'Graphic Design') ? 'selected' : ''; ?>>Graphic Design</option>
                <option value="SEO" <?php echo ($row['type'] == 'seo') ? 'selected' : ''; ?>>SEO</option>
                <option value="Content Writing" <?php echo ($row['type'] == 'testing') ? 'selected' : ''; ?>>Testing</option>
                <option value="Digital Marketing" <?php echo ($row['type'] == 'Digital Marketing') ? 'selected' : ''; ?>>Digital Marketing</option>
                <option value="Others" <?php echo ($row['type'] == 'Social Media Marketing') ? 'selected' : ''; ?>>Social Media Marketing</option>
            </select>

            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($row['date']); ?>" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" required><?php echo htmlspecialchars($row['description']); ?></textarea>

            <button type="submit">Delete Portfolio</button>
        </form>
    </div>

</body>
</html>