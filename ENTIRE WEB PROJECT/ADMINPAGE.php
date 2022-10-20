<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JUNKTION LOGIN</title>
        <link rel="stylesheet" href="JUNKTION.CSS">
    </head>
    <body>
        <div class="headr container-one">
            <header>
                <img src="logo/junktion2.png" class="logo">
                <ul class="menu-bar">
                    <li><a href="JUNKTION.html" title ="This will take you to the Homepage"class="navlinks">HOME</a></li>                                     
                    <li><a href="JUNKTIONCONTACTS.HTML" title="This shows you our contacts"class="navlinks">CONTACT US</a></li>                                       
                    <li><a href="JUNKTIONHELPPAGE.HTML" title="Help page"class="navlinks">HELP</a></li>                                                                
                </ul>
            </header>
        </div>
        <div class="container-one" id="bgpic3">
            <div class="container">
                <h1 class="Headings font-4">LOG INTO YOUR ACCOUNT</h1>
                <form method="post" action="PROCESS_JUNKTIONLOGIN2.php">
                    <fieldset style="border:2px solid white"id="fieldset">
                        <legend>Login Details</legend>
        
                        <label>Username:</label>
                        <input type="text" id="username" name="user__name" placeholder="Your username"required><br><br>
        
                        <label>Password:</label>
                        <input type="password" id="password" name="user_password" placeholder="Your passsword"required><br><br>
                    </fieldset>
                    <ul id="loginsign">
                        <li><button title="After filling the information above,clicking this logs you into your account" type="submit" name="LOGIN" class="btn" >LOG IN</button></li>
                        <li><button title="Clicking this clears any information you had entered above" type="reset" name="RESET" class="btn" value="reset">RESET</button></li>
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