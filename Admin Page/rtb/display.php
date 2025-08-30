<?php
include "conect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTB Details</title>
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

        table th, table td {
            padding: 12px 15px;
        }

        table tr {
            border-bottom: 1px solid #dddddd;
        }

        table tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        /* Center the page content */
        .container {
            width: 79.5%;
            
            margin: 0;  /* Removed margin to align to the top */
            padding: 20px;
            
        }

        /* Button styles */
        button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100px; 
            height: 40px;
        }

        .update {
            background-color: blue;
            color: white;
        }

        .update a {
            text-decoration: none;
            color: white;
        }

        .delete {
            background-color: red;
            color: white;
        }

        .delete a {
            text-decoration: none;
            color: white;
        }

        .anchor {
            color: black;
            text-decoration: none;
        }

        .anchor:hover {
            color: white;
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
            <a href="#">RTB</a><i class="fas fa-newspaper"></i>&nbsp;
        </li>
        <li>
            <a href="../publishers/read.php">Publishers</a><i class="fas fa-users"></i>&nbsp;
        </li>
        <li>
            <a href="../contactus_inquaries/display.php">Inquiries</a><i class="fas fa-question-circle"></i>&nbsp;
        </li>
        <li>
            <a href="#">Feedbacks</a><i class="fas fa-comments"></i>&nbsp;
        </li>
        <li>
            <a href="../../Login/login_page.php" class="logout">Logout</a><i class="fas fa-sign-out-alt"></i>&nbsp;
        </li>
    </ul>
</div>

<div>
    <button class="update"><a href="form.php">add new</a></button>
</div><br><br>

<div class="container"> 
    <h2>RTB Details</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>   
                <th>user_name</th>
                <th>con_number</th>
                <th>email</th>
                <th>h_ight</th>
                <th>w_dth</th>
                <th>company</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM rtb";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $user_name = $row['u_name'];
                    $contact = $row['c_num'];
                    $email = $row['email'];
                    $hight = $row['h_ight'];
                    $width = $row['w_dth'];
                    $company = $row['company'];
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$user_name.'</td>
                    <td>'.$contact.'</td>
                    <td>'.$email.'</td>
                    <td>'.$hight.'</td>
                    <td>'.$width.'</td>
                    <td>'.$company.'</td>
                    <td><button class="update"><a href="edit.php?edit='.$id.'" class="anchor">edit</a></button></td>
                    <td><button class="delete"><a href="dele.php?delete='.$id.'" class="anchor">delete</a></button></td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>   

</body>
</html>
