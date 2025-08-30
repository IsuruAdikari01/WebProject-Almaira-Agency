<?php
require 'config.php';

$sql="SELECT requestID,campaignName,budget,days,description FROM deal";

$result=$con->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row["requestID"]." ".$row["campaignName"]." ".$row["budget"]." ".$row["days"]." ".$row["description"]."<br>";
    }
}
else
{
    echo "No Results";
}


$con->close();

?>