<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" type="text/css" href="ContactUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="images/almiralogo.png" type="image/x-icon">
    

    
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav class="navigation">
            <a href="../new/Homepage.php" class="logo">Almira Inc.</a>
            <ul class="nav-btns">
                <li><a href="../Minindu/services/services.php">All Services</a></li>
                <li><a href="../Minindu/publisher/publishers.php">Publishers</a></li>
                <li><a href="../RTB/irtb.php">RTB</a></li>
                <li><a href="http://localhost/Almaira_Agency/soft_touch/user_view_portfolio.php">Portfolio</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="../Minindu/about us/about us.php">About Us</a></li>
            </ul>
            <button class="get-in-touch-btn">Get in Touch</button>
        </nav>
    </header>

    <div class="logo1">
        <img src="images/Logo1.png" alt="company logo">
        <div class="Cname1">
            <h1>Almaira (PVT) Limited</h1>
            <h2>Let's do great and work together.</h2>
        </div>
    </div>

    <div class="Cname2">
        <h3>Contact us for inquiries.</h3>
    </div>

    <div class="contact-container">
        <!-- Left side contact details -->
        <div class="left-contact-details">
            <div class="contact-box">
                <h4>TELEPHONE</h4>
                <div class="phoneIcon">
                    <p>+94 783344780<i class="fas fa-phone"></i></p>
                </div>
            </div>

            <div class="contact-box">
                <h4>E-MAIL</h4>
                <p>AlmairaHome@gmail.com<i class="fas fa-envelope"></i></p>
            </div>

            <div class="contact-box">
                <h4>FAX</h4>
                <p>+94 712852767<i class="fas fa-fax"></i></p>
            </div>

            <div class="contact-box head-quarter">
                <h4>HEAD QUARTER</h4>
                <div class="HQicon">
                    <p>
                        Almaira (Private) Limited <br>
                        Level 30, Cinnamon Life Suite, <br>
                        No 200, TB Jaya Road, <br>
                        Kompanna Street, Colombo 02, <br>
                        Sri Lanka 00200
                    </p>
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </div>

        <!-- Vertical Line -->
        <div class="vertical-line"></div>

        <!-- Right side form -->
        <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="customer-details">
                <!-- Full Name on its own line -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                    </div>

                    <!-- Company Name on its own line -->
                    <div class="input-box">
                        <label for="companyname">Company Name</label>
                        <input type="text" id="companyname" name="companyname" placeholder="Company Name" required>
                    </div>
                </div>

                <!-- Email and Job Title on the same line -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="myEmail">E-mail</label>
                        <input type="email" id="myEmail" name="email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="input-box">
                        <label for="job">Job Title</label>
                        <input type="text" id="job" name="job" placeholder="Job Title" required>
                    </div>
                </div>

                <!-- Contact Number and Message in the next rows -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="contactnumber">Contact Number</label>
                        <input type="tel" name="contactnumber" id="contactnumber" placeholder="0987654345" required>
                    </div>
                    <div class="input-box">
                        <label for="NIC">NIC Number</label>
                        <input type="text" name="NIC" id="NICNumber" placeholder="200018710612V" required>
                    </div>
                </div>

                <div class="contactAndMessage">
                    <div class="input-box">
                        <label for="Messagebox">Message</label>
                        <textarea id="Messagebox" name="message" placeholder="Type Message"></textarea>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="button">
                    <input type="submit" name="submit" class="submit-btn" value="Submit">
                    <button type="button" class="clear-btn" id="clearForm" onclick="document.getElementById('contact-form').reset();">Clear</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Second form placed outside the main form but kept in the same structure -->
    <div class="section2">
        <h3>Search Your Inquiries</h3><br>
        <form id="searchForm" action="results.php" method="get">
            <div class="search-box">
                <label for="PasswordNIC" class="PasswordNIC">NIC : </label>
                <input type="text" name="nic" id="nic" class="search-password" placeholder="200018710612V" required>
                <input type="button" name="search" class="submit-btn" value="Search" onclick="redirectToResultsPage()">
            </div>
        </form>
    </div>

    <!--redirect to the results.php web page-->
    <script>

        function redirectToResultsPage() {
            var nic = document.getElementById('nic').value;
            if (nic) {
                window.location.href = 'results.php?nic=' + encodeURIComponent(nic);
            } else {
                alert('Please enter a NIC number.');
            }
        }

    </script>



    <?php
    include 'function.php';

    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fullName = $_POST['fullname'];
        $companyName = $_POST['companyname'];
        $email = $_POST['email'];
        $job = $_POST['job'];
        $contactnumber = $_POST['contactnumber'];
        $NIC = $_POST['NIC'];
        $message = $_POST['message'];

        // Insert data into the database
        $sql = "INSERT INTO `contactus` (fullName, companyname, email, job, contactnumber, NIC, message)
                VALUES ('$fullName', '$companyName', '$email', '$job', '$contactnumber', '$NIC', '$message')";
        $result = mysqli_query($con, $sql);

        // Check if the query was successful
        if ($result) {
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            die(mysqli_error($con));
        }
    }
    ?>

<footer class="site-footer">
    <div class="footer-content">
        <!-- Footer content here -->
        <div class="footer-top">
            <div class="footer-brand">
                <h3>Almira Inc.</h3>
                <div class="social-icons">
                    <a href="#"><img src="../new/images/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="../new/images/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../new/images/tik-tok.png" alt="TikTok"></a>
                    <a href="#"><img src="../new/images/youtube.png" alt="YouTube"></a>
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
