<?php
require_once(__DIR__ . "/config/config.php");


// Fetch all portfolios from the database
$query = "SELECT * FROM portfolios";
$data = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://localhost/Almaira_Agency/soft_touch/">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Portfolios</title>
    <style>
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Hover effect for rows */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive table */
        @media (max-width: 768px) {
            table {
                font-size: 0.9rem;
            }
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        .portfolio-title {
            margin-top: 30px;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
        }

        .message {
            background-color: #f44336; /* Red background */
            color: white; /* White text */
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
            position: relative; /* For positioning */
            animation: fadeIn 0.5s; /* Fade-in effect */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .no-records {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2rem;
            color: #888;
        }
        .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333; /* Dark background */
    padding: 10px 20px; /* Padding for navbar */
}

.navbar .logo a {
    color: white; /* Logo text color */
    font-size: 1.5rem; /* Logo font size */
    text-decoration: none; /* Remove underline */
}

.nav-links {
    list-style-type: none; /* Remove bullet points */
    margin: 0; /* Remove margin */
    padding: 0; /* Remove padding */
    display: flex; /* Flexbox for horizontal layout */
}

.nav-links li {
    margin: 0 15px; /* Spacing between links */
}

.nav-links a {
    color: white; /* Link color */
    text-decoration: none; /* Remove underline */
    padding: 5px 10px; /* Padding for links */
    transition: background-color 0.3s; /* Transition effect */
}

.nav-links a:hover {
    background-color: #555; /* Background color on hover */
    border-radius: 5px; /* Rounded corners */
}

.hamburger {
    display: none; /* Hide hamburger menu by default */
    flex-direction: column; /* Stack lines vertically */
    cursor: pointer; /* Pointer cursor */
}

.hamburger span {
    height: 3px; /* Line height */
    width: 25px; /* Line width */
    background-color: white; /* Line color */
    margin: 3px 0; /* Spacing between lines */
}

/* Responsive styles */
@media (max-width: 768px) {
    .nav-links {
        display: none; /* Hide links by default */
        flex-direction: column; /* Stack links vertically */
        width: 100%; /* Full width */
        position: absolute; /* Absolute positioning */
        top: 60px; /* Position below navbar */
        left: 0; /* Align left */
        background-color: #333; /* Background color */
        z-index: 1; /* Above other elements */
    }

    .nav-links.show {
        display: flex; /* Show links when active */
    }

    .hamburger {
        display: flex; /* Show hamburger menu */
    }
}
    </style>
</head>
<body>
<nav class="navbar">
<h1>Hello Admin</h1>
        <ul class="nav-links">
           
            <li><a href="<?php echo BASEURL ?>/all_portfolio.php">All portfolio</a></li>
        
            <?php if (isset($_SESSION['user_role'])) { ?>
                    <li><a href="<?php echo BASEURL ?>/logout.php" class="nav-link"><span></span>Log out</a></li>
            <?php } ?>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div class="container">
        <h2 class="portfolio-title">View All Portfolios</h2>

        <!-- Check if there is a message to display -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="message"><?php echo htmlspecialchars($_SESSION['message']); ?></div>
            <?php unset($_SESSION['message']); // Clear the message after displaying ?>
        <?php endif; ?>

        <!-- Portfolio Table -->
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Check if there are any records
            if ($data->num_rows > 0) {
                while ($row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>  
                        <td><?php echo htmlspecialchars($row['type']); ?></td>  
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>  
                        <td>
                            <a style="color:#e38100;" href="<?php echo BASEURL . '/edit_view.php?id=' . $row['id']; ?>">Update</a>
                            <a style="color:red;" href="<?php echo BASEURL . '/delete_view.php?id=' . $row['id']; ?>">Delete</a>
                        </td> 
                    </tr>
                    <?php
                }
            } else {
                // No records found message
                echo '<tr><td colspan="5" class="no-records">No records found</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>

    <script>
        // Hide the message after 5 seconds
        setTimeout(function() {
            const messageDiv = document.querySelector('.message');
            if (messageDiv) {
                messageDiv.style.display = 'none';
            }
        }, 5000);
    </script>

</body>
</html>
