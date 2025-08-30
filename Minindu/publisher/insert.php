<?php
    require 'config.php';

    
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Phone=$_POST["phone"];
    $Message=$_POST["message"];
    

    $sql="INSERT INTO publishers VALUES('','$Name','$Email','$Phone','$Message')";

    if($con->query($sql))
    {
        echo "Insert Succes";
    }
    else{
        echo "Error".$con->error;
    }

    $con->close();
?>