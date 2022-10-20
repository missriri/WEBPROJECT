<?php
$sql="CREATE DATABASE food_project";//created a database called food_project

if($conn->query($sql)===TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "ERROR ".$conn->error;
}
echo"<br>";
?>