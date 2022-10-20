<?php

$conn= new mysqli("localhost","root","","NUMBERS");

if($conn->connect_error)
    {
        die("Not connected ".$conn->connect_error);
    }
else
    {
        echo "Connected ";
    }
echo "<br>";



    
?>