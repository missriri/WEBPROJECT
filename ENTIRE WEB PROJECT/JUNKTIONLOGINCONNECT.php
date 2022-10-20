<?php
$conn= new mysqli("localhost","root","","my_project");
if($conn->connect_error)
{
    die("Not connected".$conn->connect_error);
}
else
{
    echo "";
}

?>