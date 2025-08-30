<?php
include 'conect.php';
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];
    $sql="DELETE from rtb where id=$id";
    $result =mysqli_query($conn, $sql);
    if($result)
    {
        header('location:display.php??delete succesfully');
        

    }
    else
    {
        die("connection failed :".mysqli_connect_error());

    }
}

?>