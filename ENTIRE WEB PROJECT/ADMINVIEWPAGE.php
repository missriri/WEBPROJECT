<?php
session_start();
?>
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

echo "Welcome ".$_SESSION["User"];
echo ".You are logged in as an admin.";
echo "<br>";
echo "ADMINISTRATORS PASSWORD.";
echo "<br>";
 $sql_select="SELECT record_id,Userpassword FROM ADMIN_PASSWORD";
    $result=$conn->query($sql_select);
    
    if($result->num_rows>0)
        {
            echo "<table>";
                    echo "<tr>";
                        echo"<th>Record ID</th>";
                        echo"<th>Password</th>";
                    echo"</tr>";
            while($rows=$result->fetch_assoc())
                {
                    echo "<tr>";
                        echo"<td>".$rows['record_id']."</td>";
                        echo"<td>".$rows['Userpassword']."</td>";
                    echo"</tr>";
                }
            echo "</table>";
        }
    else
        {
            echo"No records matching your query were found";
            echo "<br>";
        }

echo "ADMINISTRATORS.";
echo "<br>";

$sql_select="SELECT record_id,Firstname,Middlename,Lastname,Email,username,Userpassword,Userpasswordconfirm,Dateofbirth,Phonenumber FROM admin_table";
$result=$conn->query($sql_select);

if($result->num_rows>0)
    {
        echo "<table>";
                echo "<tr>";
                    echo"<th>Record ID</th>";
                    echo"<th>First name</th>";
                    echo"<th>Middle name</th>";
                    echo"<th>Last name</th>";
                    echo"<th>Email</th>";
                    echo"<th>Username</th>";
                    echo"<th>Password</th>";
                    echo"<th>Password confirmation</th>";
                    echo"<th>Date of birth</th>";
                    echo"<th>Phone number</th>";
                    echo"<th>Function</th>";
                echo"</tr>";
        while($rows=$result->fetch_assoc())
            {
                echo "<tr>";
                    echo"<td>".$rows['record_id']."</td>";
                    echo"<td>".$rows['Firstname']."</td>";
                    echo"<td>".$rows['Middlename']."</td>";
                    echo"<td>".$rows['Lastname']."</td>";
                    echo"<td>".$rows['Email']."</td>";
                    echo"<td>".$rows['username']."</td>";
                    echo"<td>".$rows['Userpassword']."</td>";
                    echo"<td>".$rows['Userpasswordconfirm']."</td>";
                    echo"<td>".$rows['Dateofbirth']."</td>";
                    echo"<td>".$rows['Phonenumber']."</td>";
                    echo "<td>";
                    ?>
                    <a  class="logsignlinks" href="UPDATEADMINS.php?id=<?php echo $rows['record_id']?>">EDIT</a>
                    <a  class="logsignlinks"href="DELETEADMINS.php?id=<?php echo $rows['record_id']?>">DELETE</a>
                    <?php
                    echo"</td>";
                    echo"</tr>";
            }
        echo "</table>";
    }
else
    {
        echo"No records matching your query were found";
        echo "<br>";
    }
echo "CUSTOMERS.";
echo "<br>";
$sql_select="SELECT record_id,Firstname,Middlename,Lastname,Email,username,Userpassword,Userpasswordconfirm,Dateofbirth,Phonenumber FROM USERS";
$result=$conn->query($sql_select);

if($result->num_rows>0)
    {
        echo "<table>";
                echo "<tr>";
                    echo"<th>Record ID</th>";
                    echo"<th>First name</th>";
                    echo"<th>Middle name</th>";
                    echo"<th>Last name</th>";
                    echo"<th>Email</th>";
                    echo"<th>Username</th>";
                    echo"<th>Password</th>";
                    echo"<th>Password confirmation</th>";
                    echo"<th>Date of birth</th>";
                    echo"<th>Phone number</th>";
                    echo"<th>Function</th>";
                    
                echo"</tr>";
        while($rows=$result->fetch_assoc())
            {
                echo "<tr>";
                    echo"<td>".$rows['record_id']."</td>";
                    echo"<td>".$rows['Firstname']."</td>";
                    echo"<td>".$rows['Middlename']."</td>";
                    echo"<td>".$rows['Lastname']."</td>";
                    echo"<td>".$rows['Email']."</td>";
                    echo"<td>".$rows['username']."</td>";
                    echo"<td>".$rows['Userpassword']."</td>";
                    echo"<td>".$rows['Userpasswordconfirm']."</td>";
                    echo"<td>".$rows['Dateofbirth']."</td>";
                    echo"<td>".$rows['Phonenumber']."</td>";
                    echo "<td>";
                    ?>
                    <a  class="logsignlinks" href="UPDATEUSERS.php?id=<?php echo $rows['record_id']?>">EDIT</a>
                    <a  class="logsignlinks"href="DELETEUSERS.php?id=<?php echo $rows['record_id']?>">DELETE</a>
                    <?php
                    echo"</td>";
                    echo"</tr>";
                    ?>
    <?php
                echo"</tr>";
            }
        echo "</table>";
    }
else
    {
        echo"No records matching your query were found";
        echo "<br>";
    }
echo "FOOD.";
echo "<br>";

    $sql_select="SELECT record_id,Foodname,Foodprice,Foodimage FROM FOOD";
    $result=$conn->query($sql_select);
    
    if($result->num_rows>0)
        {
            echo "<table>";
                    echo "<tr>";
                        echo"<th>Record ID</th>";
                        echo"<th>Food name</th>";
                        echo"<th>Food price</th>";
                        echo"<th>Food Image</th>";
                        echo"<th>Function</th>";
                        
                    echo"</tr>";
            while($rows=$result->fetch_assoc())
                {
                    echo "<tr>";
                        echo"<td>".$rows['record_id']."</td>";
                        echo"<td>".$rows['Foodname']."</td>";
                        echo"<td>".$rows['Foodprice']."</td>";
                        echo"<td>".$rows['Foodimage']."</td>";
                        echo "<td>";
                        ?>
                        <a  class="logsignlinks" href="UPDATEFOOD.php?id=<?php echo $rows['record_id']?>">EDIT</a>
                        <a  class="logsignlinks"href="DELETEFOOD.php?id=<?php echo $rows['record_id']?>">DELETE</a>
                        <?php
                        echo"</td>";
                        echo"</tr>";
                        ?>
        <?php
                    echo"</tr>";
                }
            echo "</table>";
        }
    else
        {
            echo"No records matching your query were found";
            echo "<br>";
        }
        
    
?>
                <ul id="logsign">
                    <li><a href="JUNKTION.html" title="This logs you out of your account"class="logsignlinks">LOG OUT</a></li>
                </ul>      
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
