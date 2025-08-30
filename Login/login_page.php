<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="lo_gin.css">
</head>

<body>
   <div>nav</div><!-- navigathion-->

   <div class="path">
    <a href="#">dashboard </a>><a href = "login_page.php"> login</a>
    </div><!--path-->

   <div class="imgs"> 
    <img src="logo.png" alt="logo">
   </div><!--logo-->

   


    <div class="loginbox">
    <h1>- - - Welcome Back - - -</h1>    
    <h2>Login</h2>
    <form id="loginForm" action="login_data.php" method="post">
        <label for="username">-Username-</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        <label for="password">-Password-</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <div class="remember-me">
            <input type="checkbox" id="rememberMe">
            <label for="rememberMe">Remember me</label>
        </div>
        <button name="l_submit" class="lbtn" type="submit">Login</button>
    </form>
   
    <div class="forgot-signup">
        Don't have an account |
        <a href="#">Sign Up</a>
    </div>
   </div><!--form-->

   <div class="terms">
    <div class="link-item"><a href="#">Privacy Policy</a></div>
    <div class="link-item"><a href="#">Terms and Conditions</a></div>
    <div class="link-item"><a href="#">Help and feedback</a></div>
   </div><!--privacytermshelp-->

   
</body>
</html>