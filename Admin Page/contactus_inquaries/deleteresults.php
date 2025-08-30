<?php

include 'db_con.php';

if(isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `contactus` WHERE ID = $id";
    $result = mysqli_query($con,$sql);

    if($result) {
        echo "<script>
                alert('Record successfully deleted.');
                window.location.href='display.php?nic=$nic';
              </script>";
    } else {
        die(mysqli_error($con));
    }

    $con->close();
}



?>