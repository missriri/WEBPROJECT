<?php
//Only connecting to the MYSQL DBMS

//OBJECT ORIENTED PROGRAMMING WAY
$conn= new mysqli("localhost","root","","food_projects");//The line that connects to the DBMS

if($conn->connect_error)
    {
        die("Not connected ".$conn->connect_error);
    }
else
    {
        echo "Connected successfully";
    }
echo "<br>"; 
//created a table called Clients
$sql="CREATE TABLE Clients
    (
        Client_id INT(10) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(10)NOT NULL,
        seconname VARCHAR(10) NOT NULL,
        email VARCHAR(15)
    )";

$sql_insert= "INSERT INTO Clients(firstname,seconname,email)VALUES('Andrew','Mwaura','andrew.njugia@gmail.com')";

if($conn->query($sql_insert)===TRUE)
    {
        echo "Info inserted successfully";
    }
else
    {
        echo "ERROR ".$conn->error;
    }
echo"<br>";



?>