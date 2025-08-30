<?php
require_once(__DIR__ . "/config/config.php");

// Fetch all portfolios from the database
$query = "SELECT * FROM portfolios";
$result = mysqli_query($conn, $query);

$portfolios = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $portfolios[] = $row;
    }
}
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding-top: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
        }

        /* Card Container */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Individual Card */
        .card {
            background-color: white;
            width: 30%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Card Image */
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        /* Card Content */
        .card-content {
            padding: 15px;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card-content p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #555;
        }

        /* Card Action (Edit/Delete) */
        .card-actions {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            border-top: 1px solid #ddd;
        }

        .card-actions a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .card-actions a:hover {
            color: #007BFF;
        }

        /* Responsive Cards */
        @media (max-width: 1024px) {
            .card {
                width: 48%;
            }
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<header>
        <nav class="navigation">
            <a href="../new/Homepage.php" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="../Minindu/services/services.php">All Services</a></li>
                <li><a href="../Minindu/publisher/publishers.php">Publishers</a></li>
                <li><a href="../RTB/irtb.php">RTB</a></li>
                <li><a href="http://localhost/Almaira_Agency/soft_touch">Portfolio</a></li>
                <li><a href="../Contact Us/ContactUs.php">Contact Us</a></li>
                <li><a href="../Minindu/About Us/About Us.php">About Us</a></li>
            </ul>
            <button class="get-in-touch-btn">Get in Touch</button>
        </nav>
    </header>
    <div class="container">
        <h2>View All Portfolios</h2>
        <div class="card-container">
            <?php if (count($portfolios) > 0): ?>
                <?php foreach ($portfolios as $portfolio): ?>
                    <div class="card">
                        <div class="card-content">
                           <center><b><h3><?php echo htmlspecialchars($portfolio['title']); ?></h3></b></center>
                            <p><strong>Type:</strong> <?php echo htmlspecialchars($portfolio['type']); ?></p>
                            <p><strong>Date:</strong> <?php echo htmlspecialchars($portfolio['date']); ?></p>
                            <p><?php echo htmlspecialchars($portfolio['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="width: 100%; text-align: center; padding: 20px;">
                    <h3>No portfolios found.</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <footer class="site-footer">
    <div class="footer-content">
        <!-- Footer content here -->
        <div class="footer-top">
            <div class="footer-brand">
                <h3>Almira Inc.</h3>
                <div class="social-icons">
                    <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="images/tik-tok.png" alt="TikTok"></a>
                    <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
                </div>
                <button class="contact-us-btn">Contact Us</button>
            </div>
            <div class="footer-contact">
                <h3>Contact Information</h3>
                <p>Address: 1234 Main St, City, Country</p>
                <p>Phone: (123) 456-7890</p>
                <p>Email: info@almirainc.com</p>
            </div>
            <div class="footer-links">
                <h3>Navigation Links</h3>
                <ul>
                    <li><a href="#">All Services</a></li>
                    <li><a href="#">RTB</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Almira Inc. All Rights Reserved. <a href="#">Privacy Policy</a></p>
            <button class="get-in-touch-button" onclick="window.location.href='form-page.php';">Get In Touch</button>
        </div>
    </div>
</footer>
</body>
</html>
