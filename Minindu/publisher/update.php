<?php
    require 'config.php';

    $Id=$_POST["id"];
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Phone=$_POST["phone"];
    $Message=$_POST["message"];
    
    if(empty($Name)||empty($Email)||empty($Phone))
    {
        echo "All Required";
    }
    else{
        $sql="UPDATE publishers set Name='$Name',Email='$Email',Phone='$Phone',Description='$Message' WHERE ID='$Id' ";
        
        if($con->query($sql))
        {
            echo "Update Succes";
        }
        else
        {
            echo "Not Updated";
        }

    }

    
    $con->close();
?>