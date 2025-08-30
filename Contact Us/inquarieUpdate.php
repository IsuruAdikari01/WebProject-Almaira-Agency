<?php
    include 'function.php';

    // Check if 'updateid' is set in the GET request
    if (isset($_GET['updateid'])) {
        // Retrieve the 'updateid' from the URL
        $id = $_GET['updateid'];
    } else {
        die("No update ID provided.");
    }
    

    // Showing previous details to minimize data redundancy
    $sql = "SELECT * FROM `contactus` WHERE ID='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $fullName = $row['fullname'];
    $companyName = $row['companyname'];
    $email = $row['email'];
    $job = $row['job'];
    $contactnumber = $row['contactnumber'];
    $NIC = $row['NIC'];
    $message = $row['message'];

    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fullName = $_POST['fullname'];
        $companyName = $_POST['companyname'];
        $email = $_POST['email'];
        $job = $_POST['job'];
        $contactnumber = $_POST['contactnumber'];
        $NIC = $_POST['NIC'];
        $message = $_POST['message'];

        // Update data in the database
        $sql = "UPDATE `contactus` SET fullname='$fullName', companyname='$companyName', 
                email='$email', job='$job', contactnumber='$contactnumber', NIC='$NIC', 
                message='$message' WHERE ID=$id";
        $result = mysqli_query($con, $sql);

        // Check if the query was successful
        if ($result) {
            echo "<script>
            alert('Data updated successfully');
            window.location='results.php?nic=$NIC';
            </script>";
        } else {
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Inquiry</title>
    <link rel="stylesheet" type="text/css" href="ContactUs.css">
    <style>
        .contact-container {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            margin: 0 auto;
            max-width: 70%;
            background-color: #e9e9e9;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        form .input-box {
            width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Form for updating the inquiry -->
    <div class="contact-container">
    <form id="contact-form" action="inquarieupdate.php?updateid=<?php echo $id; ?>" method="post">

            <div class="customer-details">
                <!-- Full Name -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required autocomplete="off" value="<?php echo $fullName; ?>">
                    </div>

                    <!-- Company Name -->
                    <div class="input-box">
                        <label for="companyname">Company Name</label>
                        <input type="text" id="companyname" name="companyname" placeholder="Company Name" required autocomplete="off" value="<?php echo $companyName; ?>">
                    </div>
                </div>

                <!-- Email and Job Title -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="myEmail">E-mail</label>
                        <input type="email" id="myEmail" name="email" placeholder="example@gmail.com" required autocomplete="off" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-box">
                        <label for="job">Job Title</label>
                        <input type="text" id="job" name="job" placeholder="Job Title" required autocomplete="off" value="<?php echo $job; ?>">
                    </div>
                </div>

                <!-- Contact Number and NIC -->
                <div class="input-row">
                    <div class="input-box">
                        <label for="contactnumber">Contact Number</label>
                        <input type="tel" name="contactnumber" id="contactnumber" placeholder="0987654345" required autocomplete="off" value="<?php echo $contactnumber; ?>">
                    </div>
                    <div class="input-box">
                        <label for="NIC">NIC Number</label>
                        <input type="text" name="NIC" id="NICNumber" placeholder="200018710612V" required autocomplete="off" value="<?php echo $NIC; ?>">
                    </div>
                </div>

                <!-- Message -->
                <div class="contactAndMessage">
                    <div class="input-box">
                        <label for="Messagebox">Message</label>
                        <textarea id="Messagebox" name="message" placeholder="Type Message"><?php echo $message; ?></textarea>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="button">
                    <button type="submit" name="submit" class="submit-btn" value="Submit">Update</button>
                    <button type="button" class="clear-btn" id="clearForm" onclick="document.getElementById('contact-form').reset();">Clear</button>
                </div>
            </div>
        </form>
    </div> 
</body>
</html>
