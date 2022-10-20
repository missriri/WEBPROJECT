<html>
    <head>
        <meta charset="utf-8">
        <title>UPDATE</title>
        <link rel="stylesheet" href="JUNKTION.CSS">
    </head>
    <body>
        <div class="headr container-one">
            <header>
                <img src="logo/junktion2.png" class="logo">
                <ul class="menu-bar">
                    <li><a href="JUNKTION.php" title ="This will take you to the Homepage"class="navlinks">HOME</a></li>                                     
                    <li><a href="JUNKTIONMENUPAGE.HTML" title="This will take you to our menu page" class="navlinks">MENU</a></li>    
                    <li><a href="JUNKTIONCONTACTS.HTML" title="This shows you our contacts"class="navlinks">CONTACT US</a></li>                                        
                    <li><a href="JUNKTIONHELPPAGE.HTML" title="Help page"class="navlinks">HELP</a></li>                                                               
                </ul>
            </header>
        </div>
        <div class="container-one" id="bgpic4">
            <div class="container">
                <h1 class="Headings font-4" style="text-align:center">UPDATE ADMIN INFORMATION</h1>
                <div class="form-cont">
                <form method="post" action="process_updateadmins.php">
                    <fieldset style="border:2px solid white "id="fieldset">
                        <legend>Registration Details</legend>

                            <label>Record ID:</label>
   		                    <input type="text" name="RECORD_ID" class="form-edit" required><br><br>

                            <label for="fname">First Name:</label>
   		                    <input type="text" id="fname" name="first_name" class="form-edit" required><br><br>

   		                    <label for="mname">Middle Name:</label>
   		                    <input type="text" id="mname" name="middle_name" class="form-edit" required><br><br>
                
                            <label for="lname">Last Name:</label>
   		                    <input type="text" id="lname" name="last_name" class="form-edit" required><br><br>
   
                            <label for="emailadd">Email Address: </label>
                            <input type="email" id="emailadd" name="email_address" class="form-edit" required><br><br>

                            <label>Username:</label>
                            <input type="text" id="username" name="user__name" class="form-edit" required><br><br>
        
                            <label>Password:</label>
                            <input type="password" id="password" name="user_password" class="form-edit" required><br><br>

                            <label>Confirm Password:</label>
                            <input type="password" id="password" name="user_password" class="form-edit" required><br><br>

                            <label for="date">Date of birth</label>
                            <input type="Date" id="" name="date" max="2021-07-09" class="form-edit"><br><br>
                            <label for="phone">Phone number</label>
                            <div class="row">
                                <div class="reg-column col-w-15">
                                    <input type="number" name="Country code" min="3" max="3" value="+254" required>
                                </div>
                                <div class="reg-column col-w-80"style="float:right;" required>
                                    <input type="tel" name="phone"><br><br>
                                </div>
                            </div>
                    </fieldset>
                </div>
                <ul id="loginsign">
                        <li><button type="submit" name="update" class="btn" >UPDATE</button></li>
                </ul>  
                </form>           
            </div>    
       </div>

 <footer class="cont-footer">
            <div class="row">
                <div class="column">
                    <img src="logo/Juktion3.png" class="logo-footer">
                </div>
                <ul>
                <div class="column" style="padding-top: 120px;padding-right: 10px;">
                    <li><a href="#" Title="Our about us page" id="footer-color">About us</a></li>
                    <li><a href="#" Title="Companies we have partnered with"id="footer-color">Partners</a></li>
                    <li><a href="#" Title="Frequently Asked questions" id="footer-color">FAQ</a></li>
                    <li><a href="#" Title="Cookies"id="footer-color">Cookies</a></li>
                    <li><a href="#" Title="Our privacy terms"id="footer-color">Privacy</a></li>
                </div>
                <div class="column" style="padding-top: 120px; text-align: right;">
                    <li><a href="#" style="color: white;">&copy; 2021 JUNKTION || All rights reserved</a></li>
                </div>
                </ul>
             
            </div>
        </footer>

    </body>
</html>