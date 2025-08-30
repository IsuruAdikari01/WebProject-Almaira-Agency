<?php
    require 'db_con.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquaries Search Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../Admin.css">
    <style>
        /* Styling the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: left;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        table thead {
            background-color: #009879;
            color: white;
            text-align: left;
            font-weight: bold;
        }

        table th{
            padding: 12px 30px;
            text-align:center;

        } 
        table td {
            padding: 12px 30px;
            text-align:center;
        }

        table tr {
            border-bottom: 1px solid #dddddd;
        }

       /* table tr:nth-of-type(even) {
            background-color: none;
        }*/

        

        table tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        /* Add hover effect */
        /*table tr:hover {
            background-color: none;
        }*/

        /* Center the page content */
        .container {
            /*width: 83%;*/
            width: 79.5%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Button styles */
        button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100px; /* Increase button width */
            height: 40px; /* Increase button height */
        }

       

        /* Update button styling */
        .update {
            background-color: blue;
            color: white;
        }

        .update a{
            text-decoration:none;
            color:white;
        }

        /* Delete button styling */
        .delete {
            background-color: red;
            color: white;
        }

        .delete a{
            text-decoration:none;
            color:white;
        }


        /* Anchor tag styling inside the buttons */
        .anchor {
            color: black; /* Make the link color black */
            text-decoration: none; /* Remove underline from links */
        }

        /* Change anchor link color on hover */
        .anchor:hover {
            color: white; /* On hover, make link white */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }
        }

        h2 {
            text-align: center;
            color: #333;
        }

    </style>
</head>
<body class="dark-theme">
    <!-- Side Menu -->
    <div class="side-menu">
        <div class="brand-name">
            <h1>Almaira Inc.</h1>
        </div>
        <ul>
            <li>
                <a href="../admin.php">Dashboard</a><i class="fas fa-tachometer-alt"></i>&nbsp;
            </li>
            <li>
                <a href="../Advertisers/view.php">Advertisers</a><i class="fas fa-bullhorn"></i>&nbsp;
            </li>
            <li>
                <a href="../rtb/display.php">RTB</a><i class="fas fa-newspaper"></i>&nbsp;
            </li>
            <li>
                <a href="#">Publishers</a><i class="fas fa-users"></i>&nbsp; <!-- Users icon -->
            </li>
            <li>
                <a href="../contactus_inquaries/display.php">Inquiries</a><i class="fas fa-question-circle"></i>&nbsp;
            </li>
            <li>
                <a href="#">Feedbacks</a><i class="fas fa-comments"></i>&nbsp;
            </li>
            <li class="logout">
                <a href="../../Login/login_page.php" class="logout">Logout </a><i class="fas fa-sign-out-alt"></i>&nbsp;
            </li>
        </ul>
    </div>

<div class="container">
    <h2>Publishers</h2>

    
                    <table>
                    <thead>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
    

    <?php

    $sql = "SELECT * FROM `publishers`"; // corrected the quotes around 'contact'
    $result = mysqli_query($con, $sql);

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        
        while($row=$result->fetch_assoc())
        {
            echo "<tr>
            <td>".$row['ID']."</td>
            <td>".$row['Name']."</td>
            <td>".$row['Email']."</td>
            <td>".$row['Phone']."</td>
            <td>".$row['Description']."</td>
            </tr>";
        }
    }
    else{
        echo "No Result";
    }

    $con->close();
?>

</tbody></table>

</div>

</body>
</html>