<?php

if (!isset($_SESSION)) { session_start(); }

define( "BASEURL" , "http://localhost/Almaira_Agency/soft_touch" );




$servername="localhost";
$username="root";
$password="";
$db="soft_touch";

//create connection
$conn=new mysqli($servername,$username,$password,$db);

//chech connection
if($conn->connect_error) {
    die("Connection failed.".$conn->connect_error);
}
?>