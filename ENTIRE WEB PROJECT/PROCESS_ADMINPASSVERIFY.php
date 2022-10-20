<?php
session_start();
require_once("JUNKTIONLOGINCONNECT.php");

if(isset($_POST["SUBMIT_PASSWORD"]))
{
    if (empty($_POST["user_password"]))
    {
        header("location:ADMINPASSWORDVERIFY.php");//?error=Emptyinput
        exit();
    }
    else
    {
        $sql_select="SELECT * from ADMIN_PASSWORD where Userpassword ='".$_POST["user_password"]."'";
        $result=$conn->query($sql_select);

        if($result->fetch_assoc())
        {
            header("location:adminregister.php");
        }
        else
        {
            header("location:ADMINPASSWORDVERIFY.php");
            echo "Administrator password entered is incorrect";
        }
    }
}

?>