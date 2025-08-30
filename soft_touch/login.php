<?php require_once(__DIR__ . "/config/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Almaira_Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style1.css">
    <style>
        body, h1, form, input {
    margin: 0;
    padding: 0;
}

/* Apply styles to body */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f8ff; /* Light blue background */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full height for centering */
}

/* Login wrapper */
.login-wrapper {
    background-color: #ffffff; /* White background for the form */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    max-width: 400px; /* Maximum width of the form */
    width: 100%; /* Full width */
    padding: 20px;
}

/* Header styles */
.header {
    text-align: center;
    margin-bottom: 20px; /* Space below the header */
}

/* Main styles */
.main {
    display: flex;
    flex-direction: column;
}

/* Input fields */
.login-element {
    padding: 12px;
    margin-bottom: 15px; /* Space between fields */
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.login-element:focus {
    border-color: #68b3c0; /* Teal border on focus */
    outline: none;
}

/* Button styles */
.submit_btn {
    background-color: #68b3c0; /* Teal button */
    color: white;
    border: none;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit_btn:hover {
    background-color: #54a1b2; /* Darker teal on hover */
}

/* Responsive styles */
@media (max-width: 500px) {
    .login-wrapper {
        width: 90%; /* Full width on small screens */
    }
}
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="container">
            <div class="header">
            <h1 style="font-style: italic; color: #68b3c0;">Login</h1>

            </div>

            <div class="main">
                <form action="<?php echo BASEURL ?>/process/login_process.php" method="POST">
                    <span>
                        <input class="login-element" type="text" id="email" name="email" placeholder="E-mail" required>
                    </span>
                    <span>
                        <input class="login-element" type="password" id="password" name="password" placeholder="Password" required>
                    </span>
                    <input type="submit" class="submit_btn" id="submit_btn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
