<?php
require("JUNKTIONLOGINCONNECT.php");

$sql="CREATE TABLE FOOD
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    Foodname VARCHAR(10) NOT NULL,
    Foodprice VARCHAR(10) NOT NULL,
    Foodimage VARCHAR(100) NOT NULL
)";
$fname=$_POST["food_name"];
$fprice=$_POST["food_price"];
$fimage=$_POST["food_image"];

$sql_insert="INSERT INTO FOOD(Foodname,Foodprice,Foodimage)VALUES('$fname','$fprice','$fimage')";
    if($conn->query($sql_insert)===TRUE)
        {
            echo "Inserted successfully ";
        }
    else
        {
            echo "Error ".$conn->error;
        }
?>