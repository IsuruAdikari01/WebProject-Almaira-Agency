<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almira Inc. | Advertisement Agency</title>
    <link rel="icon" href="images/almiralogo.png" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Almaira_Agency/soft_touch/Homepage.css">
    <!--<script src="IWT-project\JS\newwww.js"></script>-->
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navigation">
            <a href="#home" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="../Minindu/services/services.php">All Services</a></li>
                <li><a href="../Minindu/publisher/publishers.php">Publisher</a></li>
                <li><a href="../RTB/irtb.php">RTB</a></li>
                <li><a href="http://localhost/Almaira_Agency/soft_touch/user_view_portfolio.php">Portfolio</a></li>
                <li><a href="../Contact Us/contactus.php">Contact Us</a></li>
                <li><a href="../Minindu/About Us/About Us.php">About Us</a></li>
                <li><a href="../new/Homepage.php">Log Out</a></li>
            </ul>
            <button class="get-in-touch-btn" onclick="window.location.href='form-page.php';">Get in Touch</button>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="greeting">
            <h1>Looking to grow your<br> business in an intelligent way?<br> We can help.</h1>
            <p>Transforming Ideas into Impactful Campaigns.</p>
            <button class="connect-btn">Let's Connect</button>
        </div>
        <div class="image-container">
            <img src="images/img2.webp" alt="Phones showcasing ads" />
        </div>
    </main>

    <!-- Moving Brand Logos Section -->
    <div class="logo-carousel-container">
        <div class="logo-carousel">
            <img src="images/vectorwiki-addidas-logo.png" alt="Brand 1">
            <img src="images/vectorwiki-lacoste-logo-logo.png" alt="Brand 2">
            <img src="images/vectorwiki-meta-2-logo.png" alt="Brand 3">
            <img src="images/vectorwiki-pinterest-5-logo.png" alt="Brand 4">
            <img src="images/vectorwiki-puma-logo-logo.png" alt="Brand 5">
            <img src="images/vectorwiki-uber-eats-2020-logo-logo.png" alt="Brand 6">
            <img src="images/vectorwiki-spotify-text-logo.png" alt="Brand 7">
            <img src="images/vectorwiki-gucci-logo-logo.png" alt="Brand 8">
            <img src="images/moose.png" alt="Brand 9">
            <img src="images/vectorwiki-fila-logo.png" alt="Brand 10">
            <img src="images/vectorwiki-hermes-3-logo.png" alt="Brand 11">
            <img src="images/vectorwiki-prada-logo-logo.png" alt="Brand 12">
            <img src="images/vectorwiki-asus-logo-3-logo.png" alt="Brand 13">
            <img src="images/vectorwiki-decathlon-4-logo.png" alt="Brand 14">
            <img src="images/vectorwiki-burberrys-of-london-logo.png" alt="Brand 15">
            <img src="images/vectorwiki-chanel-logo.png" alt="Brand 16">
            <img src="images/HemasHoldingsLogo.jpeg" alt="Brand 17">
            <img src="images/vectorwiki-hugo-boss-logo.png" alt="Brand 18">
            <!-- Duplicated logos for seamless scrolling -->
            <img src="images/vectorwiki-addidas-logo.png" alt="Brand 1">
            <img src="images/vectorwiki-lacoste-logo-logo.png" alt="Brand 2">
        </div>
    </div>

   <!-- Our Feed Section -->
    <section class="our-feed">
        <h2>Why Choose Us?</h2>
        <div class="slider-container">
            <!-- Left Text Section -->
            <div class="slider-text">
                <h1 id="slider-title">Digital Marketing Campaigns</h1>
                <p id="slider-description">
                    We design targeted digital marketing strategies to boost your brand's online presence.<br>
                    Our team creates ads that engage, convert, and grow your audience through social media,<br> search engines, and beyond.
                </p>
                <div class="slider-buttons">
                    <!-- Removed "Shop the collection Outline" button -->
                    <button class="btn learn-more-btn"><a href="#">Learn More</a></button>
                </div>
            </div>

            <!-- Right Image Section -->
            <div class="slider-images">
                <img src="images/laptop.jpeg" alt="Slide 1" class="active">
                <img src="images/designer222.jpg" alt="Slide 2">
                <img src="images/upintheair.jpg" alt="Slide 3">
                <img src="images/professional.jpg" alt="Slide 4">
                <img src="images/social-media-concept.jpg" alt="Slide 5">
            </div>

            <!-- Navigation Arrows -->
            <div class="slider-navigation">
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

    </section>

<!-- Our Passion Section -->
<section class="passion-section" style="background-color: black;">

    <h2 style="color: white;">Our Passion and Our People Are What Make Us Successful</h2>
    <p style="color: white;">
        At Almira Inc., we believe that creativity is fueled by passion and innovation.<br>
        Our team is a vibrant mix of talented individuals who share a common goal: <br>
        to craft compelling narratives that resonate with audiences and elevate brands.<br>
        With diverse backgrounds and expertise, our people bring unique perspectives <br>
        to every project, ensuring that we not only meet but exceed our clients' expectations.<br>
        <br>
        Together, we foster a collaborative environment where ideas flourish <br>
        and every voice is heard, making each campaign a true reflection of our <br>
        commitment to excellence. Your success is our mission, and it drives us <br>
        to push boundaries and explore new horizons in advertising.
    </p>
</section>
<!-- Services Section -->
<div class="services-section">
    <h2 class="section-title">What We Offer</h2>
    <div class="services-grid">
        <div class="service-card">
            <img src="images/influencer.jpg" alt="Influencer Marketing">
            <div class="card-overlay">
                <h3>Influencer Marketing</h3>
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
        <div class="service-card">
            <img src="images/content.jpg" alt="Social Content Studio">
            <div class="card-overlay">
                <h3>Social Content Studio</h3>
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
        <div class="service-card">
            <img src="images/eating.jpg" alt="Social Experiential Marketing">
            <div class="card-overlay">
                <h3>Social Experiential Marketing</h3>
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
        <div class="service-card">
            <img src="images/community.jpg" alt="Community Management">
            <div class="card-overlay">
                <h3>Community Management</h3>
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
        <div class="service-card">
            <img src="images/graphpeople.jpg" alt="Paid Performance Marketing">
            <div class="card-overlay">
                <h3>Paid Performance<br>Marketing</h3> <!-- Added line break here -->
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
        <div class="service-card">
            <img src="images/business intelligence.jpg" alt="Business Intelligence">
            <div class="card-overlay">
                <h3>Business Intelligence</h3>
                <a href="advertiserpage.php" class="arrow">&#8594;</a>
            </div>
        </div>
    </div>
</div>
<section class="content-section">
    <div class="container">
        <h1>Your One-Stop Shop To Evolve Your Content & Brand</h1>
        <p>
            At Almira Inc., we are your one-stop shop for evolving both your content and brand. 
            From crafting compelling narratives to optimizing for SEO, we help you connect with your audience across multiple platforms. 
            Our comprehensive approach ensures that your brand not only stands out but also grows in alignment with current market trends. 
            Whether it's developing engaging content, refining your brand identity, or managing omnichannel marketing, we offer everything you need 
            to enhance your online presence and drive meaningful impact. Let us help you transform your ideas into results.
        </p>
    </div>
</section>

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
            <p>&copy; 2024 Almira Inc. All Rights Reserved. <a href="privacy/privacy.php">Privacy Policy</a></p>
            <button class="get-in-touch-button" onclick="window.location.href='form-page.php';">Get In Touch</button>
        </div>
    </div>
</footer>
    <script src="JS/Homepage.js"></script>
</body>
</html>
