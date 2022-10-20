<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>JUNKTION</title>
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
        <div class="container-one" id="bgpic">
            <div class="container">
                <h1 class="Headings font-4">ORDER YOUR DELICACY TODAY!</h1>
                <h2 class="Headings font-3">Junktion lets you order our most delicious food and have it delivered to your doorstep!</h2>
                <?php echo "Welcome ".$_SESSION["User"];?>
                <?php echo " .You are logged in as a Customer.";?>
                
                <ul id="logsign">
                    <li><a href="JUNKTION.html" title="This logs you out of your account"class="logsignlinks">LOG OUT</a></li>
                </ul>             
            </div>    
       </div>
       <div id="cont-benefits">
           <div class="benefits">
               <h4 class="aboutj font-4">JUNKTION is the way to go!</h4>
                   <p>Having to go all the way to restaurants to get food is getting quite tiresome.
                      What if I live really far from any restaurant?What if I don't have a car to drive myself 
                      to the restaurant?Will I have to call an uber or boda boda and pay to go all the way 
                      there?Or what if I feel hungry and am thirsting for some fast food, but I simply don't
                      feel like leaving the comfort of my home? Well we have the solution to all your problems!
                      Here at Junktion we deliver your desirable meal to your doorstep.Just order the food you 
                      want and tell us your place of residence and have your food delivered to you in no time!
                   </p>
           </div>
        </div>
        <div class="container-one" id="bgpic2">
            <div class="Headings container">
                <h3 class="font-4">WHAT SOME OF OUR CUSTOMERS SAY...</h3>
                <img src="images/stivo.jpg" id="customerpics">
                <h4 class="font-3" style= "float:right; padding-right:820px">Stivo Simple Boy</h4>
                <p>"I live in Kajiado.I have been using Junktion website to order food and I can confidently say they do not dissapoint.They are usually very efficient and delivered my food
                   in from the Kajiado Branch.A very good food website.Ndio maanake!"</p>
                <img src="images/Brandon.jpg" id="customerpics">
                <h4 class="font-3" style="float:right; padding-right:820px">Brandon Kibochi</h4>
                <p>"The Junktion website is very easy to navigate and they delivered my food in less than 30 minutes,still hot.
                   Best food website ever.Cheers!"</p>
                <img src="images/POGBA.jpg" id="customerpics">
                <h4 class="font-3" style="float:right; padding-right:860px">Paul Pogba</h4>
                <p>"I have never gotten better service from another food website than Junktion.They put 
                  Uber Eats to shame!"</p>
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