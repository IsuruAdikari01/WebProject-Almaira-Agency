<?php

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName = "crudoperation";


$conn = new mysqli ($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}