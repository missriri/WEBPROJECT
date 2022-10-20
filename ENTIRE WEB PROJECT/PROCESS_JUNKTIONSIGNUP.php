<?php
require("JUNKTIONSIGNUPCONNECT.php");
//Database called my_project already created in PROCESS_JUNKTIONLOGIN.php

$sql="CREATE TABLE USERS
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(10) NOT NULL,
    Middlename VARCHAR(10) NOT NULL,
    Lastname VARCHAR(10) NOT NULL,
    Email VARCHAR(20) NOT NULL,
    username VARCHAR (15) NOT NULL,
    Userpassword VARCHAR(15) NOT NULL,
    Userpasswordconfirm VARCHAR(15) NOT NULL,
    Dateofbirth VARCHAR(8) NOT NULL,
    Phonenumber VARCHAR(14) NOT NULL
)";
//Verified creation of USERS in my_project
$fname=$_POST["first_name"];
$mname=$_POST["middle_name"];
$lname=$_POST["last_name"];
$email=$_POST["email_address"];
$username=$_POST["user__name"];
$password=$_POST["user_password"];
$password=$_POST["user_password"];
//$password=MD5($pwd);
//$password=MD5($pwd2);
$date=$_POST["date"];
$phone=$_POST["phone"];

$sql_insert="INSERT INTO USERS(Firstname,Middlename,Lastname,Email,username,Userpassword,Userpasswordconfirm,Dateofbirth,Phonenumber)VALUES
('$fname','$mname','$lname','$email','$username','$password','$password','$date','$phone')";
    if($conn->query($sql_insert)===TRUE)
        {
            echo "Inserted successfully ";
        }
    else
        {
            echo "Error ".$conn->error;
        }

session_start();
        
        if(isset($_POST["REGISTER"]))
        {
            if (empty($_POST["user__name"])|| empty($_POST["user_password"]))
            {
                header("location:JUNKTIONSIGNUP.php");
                exit();
            }
            else
            {
                $sql_select="SELECT * from USERS where username ='".$_POST["user__name"]."' and Userpassword ='".$_POST["user_password"]."'";
                $result=$conn->query($sql_select);
        
                if($result->fetch_assoc())
                {
                    $_SESSION["User"]=$_POST["user__name"];
                    header("location:JUNKTIONLOGIN.php");
                }
            }
        }

?>

  

   