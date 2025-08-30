<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rtb</title>
    <link rel="stylesheet" href="rstyle.css">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="header.css">

</head>
<body>
        <!-- Header Section -->
        <header>
        <nav class="navigation">
            <a href="../new/Homepage.php" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="../Minindu/services/services.php">All Services</a></li>
                <li><a href="../Minindu/publisher/publishers.php">Publishers</a></li>
                <li><a href="#">RTB</a></li>
                <li><a href="http://localhost/Almaira_Agency/soft_touch/user_view_portfolio.php">Portfolio</a></li>
                <li><a href="../Contact Us/ContactUs.php">Contact Us</a></li>
                <li><a href="../Minindu/About Us/About Us.php">About Us</a></li>
            </ul>
            <button class="get-in-touch-btn">Get in Touch</button>
        </nav>
    </header>
    <div class ="what">
        <div class="wd1"><h1>- What is real time bidding -</h1></div>
        <div class="wd2">
            <div class="slide">
                <img class="ims" src="images/what/rtb1.jfif" alt="rtb">  
                <img class="ims" src="images/what/rtb2.webp" alt="">
                <img class="ims" src="images/what/rtb3.jfif" alt="">
                <img class="ims" src="images/what/rtb4.jfif" alt="">
            </div>
            <script>
                function showSlides(slideshowclass, interval) 
                {
                    var slideIndex = 0;
                    var slides = document.getElementsByClassName(slideshowclass);

                    function displaySlides() {
                        for (var i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none"; // Hide all slides
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1; // Reset to first slide
                        }
                        slides[slideIndex - 1].style.display = "block"; // Show current slide
                        setTimeout(displaySlides, interval); // Change slide after specified interval
                    }
                    displaySlides();
                }

                showSlides("ims", 3000); // Call the function for all images at once
            </script>
        </div>

    </div>
        <div class="wd3"><b><p><p>RTB is an automated process where publishers sell ad inventory, and advertisers place bids in real-time and on a per impression basis.</p><p>Before the mid-2000s advent of RTB, the selling and buying of advertising media were often
             negotiated directly between an advertiser and a publisher, or via ad networks that 
            aggregated ad inventories from multiple publishers in advance. This manual process was tedious and 
            ineffective for advertisers, as advertisers often paid for ad impressions that their target audience 
            did not see.</p><p>RTB, also referred to as open auction or open marketplace, is the most common form 
            of programmatic media buying. It is where any advertiser can bid on ad impressions offered by publishers.</p>
            <p>Besides open marketplaces, RTB is also used in a private marketplace (PMP), an exclusive, invitation-only digital
            marketplace where publishers control who bids on their inventory. In PMPs, ad inventory is available only to a select
            group of advertisers, increasing the likelihood of securing higher-quality ads. </p><p>Tasks that once took hours with 
            manual media-buying now take only milliseconds with RTB, allowing advertisers to quickly respond to and optimize their
             campaigns. RTB is also a driving force behind the adoption of programmatic advertising, with its global spending expected
             to reach nearly $600 billion in 2024.</p></p></b></h2>
        </div>

    <div class="howwork">
        <div class="hd1"><h1>- How it Works -</h1></div>
                
        <div class="slider">
        <div class="img-box">
		    <img src="images/how/a.png" class="slider-img">
		</div>
        <div class="btni">
			<button  onclick="prev()">Prev</button>
			<button  onclick="next()">Next</button>
		</div>
        
        <script>
            var slider_img = document.querySelector('.slider-img');
            var images = ['a.png', 'b.png', 'c.png', 'd.png'];
            var i = 0;

            function prev(){
                if(i <= 0) i = images.length;	
                i--;
                return setImg();			 
            }

            function next(){
                if(i >= images.length-1) i = -1;
                i++;
                return setImg();			 
            }

            function setImg(){
                return slider_img.setAttribute('src', "images/how/"+images[i]);
                
            }
        </script>

        </div>
    </div>
    <div class="advan">
        <div class="ad1"><h1> - Advantages of RTB - </h1></div>
            <div class="ad2">
                <div class="ad21">
                <img src="images/adv/1.png" alt="">
                <h1>Targeting: </h1>
                <p>Advertisers can target specific audiences based on demographics, behaviors, and interests, leading to more relevant ads and higher engagement.</p>
            </div>
            
            
            <div class="ad21">

            <img src="images/adv/4.avif" alt=""> 
            <h1>Dynamic Pricing: </h1>
            <p>Bids are placed in real time, meaning advertisers can adjust their strategies based on current market conditions, competition, and performance metrics</p>
            </div>
            
            <div class="ad21">
            <img src="images/adv/3.jpg" alt="">
            <h1>Cost-Effectiveness: </h1>
            <p>Advertisers can set their budgets and bid only for the impressions that matter to them, helping to maximize return on investment (ROI)</p></div>
            
            <div class="ad21">

            <img src="images/adv/2.jfif" alt="">
            <h1>Efficiency: </h1>
            <p>RTB automates the buying and selling of ad inventory, streamlining the process and saving time for both buyers and sellers.</p>
            </div>
            
        </div>
    </div>
    <div></div>

    <div class="bar">
      <h1>Interested in our RTB services?</h1>
      <a href = "form.php">  <button class="r_btn" name="r_btn" type="submit">Request</button><a>
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