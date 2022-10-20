<?php
require("process_uploadconnect.php");

$sql="CREATE TABLE photo_insert
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    FoodItem VARCHAR(10) NOT NULL,
    FoodImage VARCHAR(100) NOT NULL,
    FoodPrice VARCHAR(10) NOT NULL
)";
$fooditem=$_POST["fooditem"];
$foodimage=$_POST["food-image"];
$foodprice=$_POST["foodprice"];

$sql_insert="INSERT INTO photo_insert(FoodItem,FoodImage,FoodPrice)VALUES
('$fooditem','$foodimage','$foodprice')";
if($conn->query($sql_insert)===TRUE)
{
    echo "Inserted successfully";
}
else
{
    echo "Error ".$conn->error;
}
echo"<br>";
?>