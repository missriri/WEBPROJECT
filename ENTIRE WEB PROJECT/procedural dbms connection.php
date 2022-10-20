<?php
//procedural way
$conn=mysqli_connect("localhost","root","");//The line that connects tO the DBMS

if(!$conn)
{
    die("Not connected ".mysqli_connect_error());
}
else
{
    echo "Connected successfully";
}
?>