<?php

//include 'Hello/connect.php';
include 'count.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Admin.css">
    <title>Admin Panel</title>
    <style>
        /* Additional CSS */
        .side-menu ul li {
            cursor: pointer;
        }
        .dynamic-content {
            padding: 20px;
        }
    </style>

    <script>
            // Idle time logout (session timeout)
            let idleTime = 0;

            // Increment idle time every minute
            function timerIncrement() {
                idleTime++;
                if (idleTime >= 15) { // Automatically logout after 15 minutes
                    logout();
                }
            }

            // Reset idle timer on mouse or keyboard activity
            document.onmousemove = resetIdleTime;
            document.onkeypress = resetIdleTime;

            function resetIdleTime() {
                idleTime = 0;
            }

            // Logout confirmation
            function confirmLogout() {
                if (confirm("Are you sure you want to log out?")) {
                    logout();
                }
            }

            // AJAX call to PHP for logging out
            function logout() {
                // Clear sessionStorage (if used)
                sessionStorage.clear();

                // Clear cookies (if any)
                document.cookie.split(";").forEach(function(c) { 
                    document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); 
                });

                // Make AJAX request to PHP logout script
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "logout.php", true); // Replace with your actual logout PHP file
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        window.location.href = "../Login/login_page.php"; // Redirect to login page
                    }
                };
                xhr.send("action=logout");

                // Notify user
                alert("You have been logged out successfully.");
            }

            // Set an interval to check idle time every 60 seconds
            setInterval(timerIncrement, 60000);
        </script>
</head>

<body class="dark-theme">
    <!-- Side Menu -->
    <div class="side-menu">
        <div class="brand-name">
            <h1>Almaira Inc.</h1>
        </div>
        <ul>
            <li onclick="loadDashboard()">
                <span>Dashboard<i class="fas fa-tachometer-alt"></i>&nbsp;</span>
            </li>
            <li>
                <a href="Advertisers/view.php">Advertisers</a><i class="fas fa-bullhorn"></i>&nbsp;
            </li>
            <li>
                <a href="rtb/display.php">RTB</a><i class="fas fa-newspaper"></i>&nbsp;
            </li>
            <li>
                <a href="publishers/read.php">Publishers</a><i class="fas fa-users"></i>&nbsp; <!-- Users icon -->
            </li>
            <li>
                <a href="contactus_inquaries/display.php">Inquiries</a><i class="fas fa-question-circle"></i>&nbsp;
            </li>
            <li>
                <a href="#">Feedbacks</a><i class="fas fa-comments"></i>&nbsp;
            </li>
            <li onclick="confirmLogout()">
                <a href="javascript:void(0);" class="logout">
                <span>Logout</span><i class="fas fa-sign-out-alt"></i>&nbsp;
                </a>
            </li>

        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="container">
        
        <div class="dynamic-content" id="dynamic-content">
            <!-- Dashboard will load by default -->
        </div>
    </div>

    <script>
        // Function to load Dashboard content
        function loadDashboard() {
            document.getElementById('dynamic-content').innerHTML = `
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h3>Users</h3>
                            <h1><?= getCount('ContactUs') ?></h1> <!-- Replace with actual user count -->                 
                        </div>
            
                        <div class="icon-case">
                            <img src="students.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h3>Inquiries</h3>
                            <h1><?= getCount('ContactUs') ?></h1>
                        </div>
                        <div class="icon-case">
                            <img src="payment.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h3>RTB</h3>
                            <h1><?= getCount('rtb') ?></h1>    
                        </div>
                        <div class="icon-case">
                            <img src="help-web-button.png" alt="">
                        </div>
                    </div>
                </div>
            `;
            // Add your database calls here to dynamically get the numbers
        }

        // Load the dashboard by default on page load
        window.onload = loadDashboard;
    </script>
</body>

</html>
