<html>
    <head>
        <meta charset="utf-8">
        <title>VERIFICATION</title>
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
        <div class="container-one" id="bgpic4">
            <div class="container">
                <h1 class="Headings font-4" style="text-align:center">ADMIN REGISTRATION VERIFICATION!</h1>
                <div class="form-cont">
                <form method="post" action="PROCESS_ADMINPASSVERIFY.php">
                    <fieldset style="border:2px solid white "id="fieldset">
                        <legend>Enter the required password to register as an admin</legend>
        
                            <label>Password:</label>
                            <input type="password" id="password" name="user_password" class="form-edit" placeholder="ADMIN PASSWORD"required><br><br>
                    </fieldset>
                </div>
                <ul id="loginsign">
                        <li><button title="After filling in the correct password,clicking this takes you to the admin register page" type="submit" name="SUBMIT_PASSWORD" class="btn" value="Register">SUBMIT PASSWORD</button></li>
                       
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