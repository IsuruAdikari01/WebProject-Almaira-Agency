<?php

require_once(__DIR__ . "/config/config.php");

// Check if a success message is set in the URL
$successMessage = '';
if (isset($_GET['portfolio_create']) && $_GET['portfolio_create'] == 'success') {
    $successMessage = 'Portfolio created successfully!';
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
    <title>Create Portfolio</title>
    <style>
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

        /* Hamburger menu for mobile */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 4px;
        }

        /* Responsive for mobile devices */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #333;
                position: absolute;
                top: 60px;
                left: 0;
            }

            .nav-links li {
                text-align: center;
                margin: 1rem 0;
            }

            .hamburger {
                display: flex;
            }

            .hamburger.active + .nav-links {
                display: flex;
            }
        }

        /* Portfolio Form Styles */
        .form-container {
            max-width: 600px;
            margin: 3rem auto;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .form-group button:hover {
            background-color: #555;
        }

        /* Success message styling */
        .success-message {
            text-align: center;
            color: green;
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="#">Welcome Admin</a>
        </div>
        <ul class="nav-links">
          
            <li><a href="<?php echo BASEURL ?>/all_portfolio.php">All portfolio</a></li>
            <li><a href="#create-portfolio">Create Portfolio</a></li>
            <?php if (isset($_SESSION['user_role'])) { ?>
                    <a href="<?php echo BASEURL ?>/logout.php" class="nav-link"><span></span>Log out</a></li>
            <?php } ?>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section id="home">
        
    </section>

    <!-- Portfolio Form Section -->
    <section id="create-portfolio">
        <div class="form-container">
            <h2>Create Your Portfolio</h2>

            <!-- Display success message if set -->
            <?php if ($successMessage) : ?>
                <div id="successMessage" class="success-message"><?php echo $successMessage; ?></div>
            <?php endif; ?>

            <form action="<?php echo BASEURL ?>/process/create_portfolio.php" method="POST">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select id="type" name="type" required>
                        <option value="Web Development">Web Development</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="seo">SEO</option>
                        <option value="testing">Testing</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit Portfolio</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        // Toggle hamburger menu on mobile view
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Remove the success message after 5 seconds
        const successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000);
        }
    </script>
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
