<?php
    $con = new mysqli("localhost","root","","iwt");

    if($con->connect_error)
    {
        die("connection  fail".$con->connect_error);
    }
?> 
