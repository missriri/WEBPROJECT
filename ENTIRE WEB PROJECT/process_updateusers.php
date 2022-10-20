<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>USER INFORMATION</title>
        <link rel="stylesheet" href="JUNKTION.CSS">
        <link rel="stylesheet" href="process_sum.css">
    </head>
    <body>
        <div class="headr container-one">
            <header>
                <img src="logo/junktion2.png" class="logo">
                <ul class="menu-bar">
                    <li><a href="FOODUPDATEFORM.php" title="Add food"class="navlinks">ADD FOOD</a></li>
                    <li><a href="JUNKTION.html" title ="This will take you to the Homepage"class="navlinks">HOME</a></li>  
                    <li><a href="JUNKTIONMENUPAGE.HTML" title="This will take you to our menu page" class="navlinks">MENU</a></li>                                       
                    <li><a href="JUNKTIONCONTACTS.HTML" title="This shows you our contacts"class="navlinks">CONTACT US</a></li>                                       
                    <li><a href="JUNKTIONHELPPAGE.HTML" title="Help page"class="navlinks">HELP</a></li>

                </ul>
            </header>
        </div>
        <div class="container-one" id="bgpic7">
<?php
require("JUNKTIONSIGNUPCONNECT.php");

if (isset($_POST['update'])) 

{
    $record=$_POST["RECORD_ID"];
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

    

    $sql_update = "UPDATE `USERS` SET `Firstname`= '$fname', `Middlename` = '$mname', `Lastname` = '$lname', `Email` = '$email',`username`='$username',`userpassword` = '$password',`Userpasswordconfirm` = '$password',`Dateofbirth` = '$date',`Phonenumber` = '$phone' WHERE `record_id` = '$record' ";
    $conn= new mysqli("localhost","root","","my_project");
    if($conn->query($sql_update)===TRUE)
        {
            echo "Record updated successfully ";
        }
    else
        {
            echo "Error ".$conn->error;
        }

}
?>
</div>
<footer class="cont-footer">
            <div class="row">
                <div class="column">
                    <img src="logo/Juktion3.png" class="logo-footer">
                </div>
              <ul>
                <div class="column" style="padding-top: 120px;padding-right: 10px;">
                    <li><a href="ABOUTJUNKTION.HTML" Title="Our about us page" id="footer-color">About us</a></li>
                    <li><a href="JUNKTIONPARTNERS.HTML" Title="Companies we have partnered with"id="footer-color">Partners</a></li>
                    <li><a href="FAQ.HTML" Title="Frequently Asked questions" id="footer-color">FAQ</a></li>
                    <li><a href="#" Title="Cookies"id="footer-color">Cookies</a></li>
                    <li><a href="JUNKTIONPRIVACY.HTML" Title="Our privacy terms"id="footer-color">Privacy</a></li>
                </div>
                <div class="column" style="padding-top: 120px; text-align: right;">
                    <li><a href="#" style="color: white;">&copy; 2021 JUNKTION || All rights reserved</a></li>
                </div>
              </ul>
            </div>
        </footer>
    </body>
</html>