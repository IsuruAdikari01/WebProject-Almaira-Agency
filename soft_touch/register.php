<?php require_once(__DIR__ . "/config/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Almaira_Agency</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6; /* Soft background color */
            padding: 40px;
            margin: 0;
            color: #333;
        }

        .form {
            max-width: 800px; /* Increased width */
            margin: auto;
            background-color: #ffffff; /* White background for the form */
            padding: 30px; /* Increased padding */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form:hover {
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.15); /* Enhanced shadow on hover */
        }

        h1 {
            text-align: center;
            color: #2c3e50; /* Darker color for headings */
            margin-bottom: 20px; /* Increased margin */
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 20px; /* Increased spacing */
        }

        label {
            display: block;
            margin-bottom: 8px; /* Increased margin */
            color: #555;
            font-weight: 500; /* Increased font weight */
        }

        .form-element,
        .form-radio {
            width: 100%;
            padding: 10px; /* Increased padding */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px; /* Increased font size */
            transition: border-color 0.3s;
        }

        .form-element:focus {
            border-color: #3498db; /* Blue border on focus */
            outline: none;
        }

        .form-radio {
            width: auto; /* Keep radio buttons small */
            margin-right: 10px;
            cursor: pointer;
        }

        .textarea {
            resize: vertical; /* Allow vertical resizing */
        }

        .submit_btn {
            background-color: #3498db; /* Blue button */
            color: white;
            border: none;
            padding: 12px; /* Increased padding */
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%; /* Full width */
        }

        .submit_btn:hover {
            background-color: #2980b9; /* Darker blue on hover */
            transform: translateY(-2px); /* Slight lift effect */
        }

        small {
            display: block;
            margin-top: 4px; /* Reduced margin */
            font-size: 12px;
            color: red;
        }

        /* Flexbox for compact layout */
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px; /* Increased gap */
        }

        .flex-item {
            flex: 1 1 45%; /* Adjust width of items */
        }

        /* Social Media Icons */
        .social-media {
            display: flex;
            justify-content: center; /* Center the icons */
            margin-top: 20px; /* Space above the icons */
        }

        .social-icon {
            margin: 0 10px; /* Space between icons */
            text-align: center; /* Center the text under the icon */
            color: #333;
            text-decoration: none;
            font-size: 24px; /* Icon size */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .flex-item {
                flex: 1 1 100%; /* Full width on smaller screens */
            }

            .form {
                padding: 20px; /* Reduced padding */
            }
        }
    </style>
</head>

<body>

<div class="form">
    <form action="<?php echo BASEURL ?>/process/register_process.php" method="POST" id="reg_form">
        <h1>Sign Up</h1>
        <div class="flex-container">
            <div class="flex-item">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input class="form-element" type="text" id="fname" name="firstname" placeholder="Your name.." autocomplete="off" required>
                    <small style="color:red;"></small>
                </div>
            </div>
            <div class="flex-item">
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-element" type="text" id="lname" name="lastname" placeholder="Your last name.." autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-element" type="email" id="email" name="email" placeholder="Your valid email.." autocomplete="off" required>
                    <small style="color:red;"></small>
                </div>
            </div>
            <div class="flex-item">
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input class="form-element" type="date" id="birthday" name="birthday" required>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-element" type="password" id="password" name="password" placeholder="Enter your password.." required>
                    <small style="color:red;"></small>
                </div>
            </div>
            <div class="flex-item">
                <div class="form-group">
                    <label for="password_repeat">Repeat Password:</label>
                    <input class="form-element" type="password" placeholder="Confirm Password" name="password_repeat" id="password_repeat" required>
                    <small style="color:red;"></small>
                </div>
            </div>
        </div>
        <div class="form-group" id="radio">
            <label>Gender:</label>
            <label for="male">Male:</label>
            <input class="form-radio" type="radio" name="gender" id="male" value="M" checked>
            <label for="female">Female:</label>
            <input class="form-radio" type="radio" name="gender" id="female" value="F">
        </div>
        <div class="form-group">
            <label for="description">Description:</label><br>
            <textarea class="form-element" name="description" rows="4" required></textarea>
        </div>
        <div>
            <input type="button" class="submit_btn" id="submit_btn" value="Submit">
        </div>
    </form>

    <!-- Social Media Icons -->
    <div class="social-media">
        <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i><br>Facebook
        </a>
        <a href="#" class="social-icon">
            <i class="fab fa-google"></i><br>Google
        </a>
        <a href="#" class="social-icon">
            <i class="fab fa-linkedin-in"></i><br>LinkedIn
        </a>
    </div>
</div>

<script src="<?php echo BASEURL ?>/assets/js/validation.js"></script>
<script>
    let submit_btn = document.querySelector("#submit_btn");
    submit_btn.addEventListener('click', function(e) {
        // prevent the form from submitting
        e.preventDefault();

        // validate fields
        let isfnameValid = checkName("#fname"),
            isEmailValid = checkEmail(),
            isPasswordValid = checkPassword(),
            ispassword_repeatValid = checkpassword_repeat();

        let isFormValid = isfnameValid &&
            isEmailValid &&
            isPasswordValid &&
            ispassword_repeatValid;

        // submit to the server if the form is valid
        console.log(isFormValid);
        if (isFormValid) {
            form.submit()
        } else {
            return false;
        }
    }, true);

    const form = document.querySelector('#reg_form');
    form.addEventListener('input', debounce(function () {
        validateField(this);
    }));
</script>
</body>
</html>
