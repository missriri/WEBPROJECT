<?php
//add sessions for admin login form
session_start();
require_once("JUNKTIONLOGINCONNECT.php");

if(isset($_POST["LOGIN"]))
{
    if (empty($_POST["user__name"])|| empty($_POST["user_password"]))
    {
        header("location:ADMINPAGE.php");//?error=Emptyinput
        exit();
    }
    else
    {
        $sql_select="SELECT * from admin_table where username ='".$_POST["user__name"]."' and Userpassword ='".$_POST["user_password"]."'";
        $result=$conn->query($sql_select);

        if($result->fetch_assoc())
        {
            $_SESSION["User"]=$_POST["user__name"];
            header("location:ADMINVIEWPAGE.php");
        }
        else
        {
            header("location:JUNKTIONLOGIN.php");
            echo"Wrong username or password";
        }
    }
}
?>