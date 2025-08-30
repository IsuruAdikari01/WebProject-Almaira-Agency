<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Almira Inc. | Advertisement Agency</title>
    <script src="js/myjs.js"></script>
    <script src="js/alert.js"></script>

</head>

<body>
    <a class="logo" href="../../new/Homepage.php"><img src="../../new/images/logo.png" width="80px"></a>
    <header>
        <nav class="navigation">
            <a href="../../new/Homepage.php" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="../services/services.php">All Services</a></li>
                <li><a href="#">Publisher</a></li>
                <li><a href="../../RTB/irtb.php">RTB</a></li>
                <li><a href="http://localhost/Almaira_Agency/soft_touch/user_view_portfolio.php">Portfolio</a></li>
                <li><a href="../../Contact Us/contactus.php">Contact Us</a></li>
                <li><a href="../about us/about us.php">About Us</a></li>
            </ul>
            <button class="get-in-touch-btn" onclick="window.location.href='form-page.php';">Get in Touch</button>
        </nav>
    </header>
	
	<hr>

    <section class="hero">
        <h1>Made for publishers</h1>
        <p>Bespoke solutions for site owners. Fully customizable ad campaigns. One tag. All ad formats.</p>
        <a href="#first" class="cta-button">Join Us</a>
    </section>

    <section class="why-choose-us">
        <h2>Why Choose Us?</h2>
        <div class="features">
            <div class="feature">
                <img src="images/1884190.png" alt="Dedicated Support">
                <h3>Dedicated Support</h3>
                <p>Get 24/7 support from our team of experts to help you.</p>
            </div>
            <div class="feature">
                <img src="images/png-transparent-computer-icons-report-fatality-analysis-reporting-system-angle-text-rectangle-thumbnail.png" alt="Transparent Reporting">
                <h3>Transparent Reporting</h3>
                <p>Real-time reporting of your campaigns with advanced analytics.</p>
            </div>
            <div class="feature">
                <img src="images/images (2).png" alt="Advanced Targeting">
                <h3>Advanced Targeting</h3>
                <p>Maximize your ad revenue with precise targeting options.</p>
            </div>
            <div class="feature">
                <img src="images/png-clipart-advertising-media-selection-computer-icons-advertising-media-selection-business-advertising-angle-text-thumbnail.png" alt="High-Quality Advertisers">
                <h3>High-Quality Advertisers</h3>
                <p>Work with the best advertisers in the industry for better returns.</p>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <h2>Simple, Transparent, and Effective</h2>
        <div class="steps">
            <div class="step">
                <h3>Step 1</h3>
                <p>Sign up: Create an account in minutes and join our network.</p>
            </div>
            <div class="step">
                <h3>Step 2</h3>
                <p>Integrate Ads: Easily integrate our ads into your website using our user-friendly tools.</p>
            </div>
            <div class="step">
                <h3>Step 3</h3>
                <p>Earn Revenue: Start earning from your content with our competitive CPM and CPC rates.</p>
            </div>
        </div>
    </section>

    <section id="first" class="form-section">
        <div class="form-text">
            <h2>Become a Publisher Partner with FreeScope Innovation</h2>
            <p>Let’s connect or leave your details, and we’ll get back to you shortly.</p>
        </div>

        <div class="form-container">
            <h3>We are here to attend to all your inquiries!</h3>
            <form action="insert.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Let's work together to unlock new revenue streams with our premium advertisers and advanced technology solutions."></textarea>
                </div>
                <p class="privacy-note">We value your privacy and protect your data. No spam, ever!</p>
                <div class="form-group">
                    <button type="submit">Let's Talk to Kick-start</button>
                </div>
                <a href="read.php" class="button-link">Read Details</a>
                <a href="updateForm.php" class="button-link">For Update</a>
                <a href="deleteForm.php" class="button-link">For Delete</a>
            </form>
        </div>
    </section>

    <section class="success-stories">
        <h2>Success Stories/Case Studies</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut commodo sagittis sapien dui mattis dui non pulvinar lorem felis nec erat.</p>
        <div class="statistics">
            <div class="stat">
                <h3>150+</h3>
                <p>Publishers Onboarded</p>
            </div>
            <div class="stat">
                <h3>95%</h3>
                <p>Customer Satisfaction</p>
            </div>
            <div class="stat">
                <h3>100+</h3>
                <p>Ad Campaigns Launched</p>
            </div>
            <div class="stat">
                <h3>50+</h3>
                <p>Awards Won</p>
            </div>
        </div>
        <div class="case-study-image">
            <img src="images/Cómo crear una sociedad en 8 pasos  _ Blog de Arsys.jpeg" alt="Success Story Image">
        </div>
    </section>

    <footer class="site-footer">
    <div class="footer-content">
        <!-- Footer content here -->
        <div class="footer-top">
            <div class="footer-brand">
                <h3>Almira Inc.</h3>
                <div class="social-icons">
                    <a href="#"><img src="../../new/images/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="../../new/images/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../../new/images/tik-tok.png" alt="TikTok"></a>
                    <a href="#"><img src="../../new/images/youtube.png" alt="YouTube"></a>
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