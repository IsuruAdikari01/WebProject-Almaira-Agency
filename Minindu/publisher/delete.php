<?php
    require 'config.php';

    $Id=$_POST["id"];
    
    $sql="DELETE FROM publishers WHERE ID='$Id' ";
        
    if($con->query($sql))
    {
        echo "Deleted";
    }
    else
    {
        echo "Not Deleted";
    }

    
    $con->close();
?>