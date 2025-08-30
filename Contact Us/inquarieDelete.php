<?php

include 'function.php';

if(isset($_GET['deleteid']) && isset($_GET['nic'])) {

    $id = $_GET['deleteid'];
    $nic = $_GET['nic'];

    $sql = "DELETE FROM `contactus` WHERE ID = $id";
    $result = mysqli_query($con,$sql);

    if($result) {
        echo "<script>
                alert('Record successfully deleted.');
                window.location.href='results.php?nic=$nic';
              </script>";
    } else {
        die(mysqli_error($con));
    }

    $con->close();
}



?>