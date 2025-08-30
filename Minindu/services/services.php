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
</head>

<body>
<a class="logo" href="../../new/Homepage.php"><img src="../../new/images/logo.png" width="80px"></a>
    <header>
        <nav class="navigation">
            <a href="../../new/Homepage.php" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="#">All Services</a></li>
                <li><a href="../publisher/publishers.php">Publisher</a></li>
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
        <h1>Our Services</h1>
        <p>At FreeScope Innovation, we bridge technology and creativity to deliver exceptional online advertising solutions. From brand design to content marketing, we help businesses reach their full potential.</p>
    </section>

    <section class="services-section">
        <h2>Services</h2>

        <div class="service">
            <h3>Brand Design <span class="toggle-arrow" onclick="toggleContent(0)">&#x25B2;</span></h3>
            <div class="service-content" id="content-0">
                <p>Our team specializes in creating brand identities that stand out. We ensure your brand conveys the right message, tone, and personality across all digital platforms.</p>
                <div class="service-details">
                    <div class="service-box">Logo Design</div>
                    <div class="service-box">Brand Messaging</div>
                    <div class="service-box">Visual Identity</div>
                    <div class="service-box">Rebranding</div>
                </div>
            </div>
        </div>

        <div class="service">
            <h3>Product & Experience Design <span class="toggle-arrow" onclick="toggleContent(1)">&#x25BC;</span></h3>
            <div class="service-content" id="content-1">
                <p>We focus on designing user-centric experiences that enhance customer interactions with your products. From UX/UI to digital touchpoints, we prioritize functionality and design.</p>
            </div>
        </div>

        <div class="service">
            <h3>Campaign & Content Design <span class="toggle-arrow" onclick="toggleContent(2)">&#x25BC;</span></h3>
            <div class="service-content" id="content-2">
                <p>Our campaigns deliver impact through tailored, data-driven strategies. We create compelling content, manage digital ads, and ensure measurable success.</p>
            </div>
        </div>

        <div class="service">
            <h3>CRM & Relationship Design <span class="toggle-arrow" onclick="toggleContent(3)">&#x25BC;</span></h3>
            <div class="service-content" id="content-3">
                <p>Build stronger relationships with your customers using our custom CRM solutions. We help you manage your customer journeys more effectively and deliver personalized experiences.</p>
            </div>
        </div>

        <div class="service">
            <h3>Advertising Technology Solutions <span class="toggle-arrow" onclick="toggleContent(4)">&#x25BC;</span></h3>
            <div class="service-content" id="content-4">
                <p>We leverage the latest in advertising technology, including programmatic buying, real-time bidding, and analytics tools to deliver maximum ROI for your campaigns.</p>
            </div>
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