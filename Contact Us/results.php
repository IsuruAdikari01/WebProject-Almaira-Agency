<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIC Search Results</title>
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

        table th, table td {
            padding: 12px 15px;
        }

        table tr {
            border-bottom: 1px solid #dddddd;
        }

        table tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        table tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        /* Add hover effect */
        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Center the page content */
        .container {
            width: 95%;
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
<body>

<div class="container">
    <h2>Search Results for NIC</h2>

    <?php
    // Include database connection
    include 'function.php'; // Assumes you have a database connection file

    // Check if NIC is passed in the URL
    if (isset($_GET['nic'])) {
        $nic = $_GET['nic'];

        // Query the database to get the data based on the NIC
        $sql = "SELECT * FROM `contactus` WHERE NIC='$nic'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Full Name</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Job Title</th>
                            <th>Contact Number</th>
                            <th>NIC</th>
                            <th>Message</th>
                            <th>Action<th>
                        </tr>
                    </thead>
                    <tbody>";

            // Fetch the results and display them in a table
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>
                        <td>" . $row['ID'] . "</td>
                        <td>" . $row['fullname'] . "</td>
                        <td>" . $row['companyname'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['job'] . "</td>
                        <td>" . $row['contactnumber'] . "</td>
                        <td>" . $row['NIC'] . "</td>
                        <td>" . $row['message'] . "</td>
                        <td>

                            <button class= 'update'>
                                <a href='inquarieUpdate.php?updateid=" .$row['ID']. "' class='anchor'>Update</a>
                            </button>
                           
                            <button class= 'delete'>
                                <a href='inquarieDelete.php?deleteid=" . $row['ID'] . "&nic=" . $row['NIC'] . "' class='anchor'>Delete</a>
                            </button>


                        </td>


                      </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>No results found for NIC: " . $nic . "</p>";
        }
    } else {
        echo "<p>No NIC provided.</p>";
        
    }
    ?>

</div>

</body>
</html>
