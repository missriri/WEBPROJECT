<html>
    <head>
        <meta charset="utf-8">
        <title>ADD</title>
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
                <h1 class="Headings font-4" style="text-align:center">ADD FOOD </h1>
                <div class="form-cont">
                <form method="post" action="process_foodform.php">
                    <fieldset style="border:2px solid white "id="fieldset">
                        <legend>Food Details</legend>

                            <label>Record ID:</label>
   		                    <input type="text" name="RECORD_ID" class="form-edit" required><br><br>

                            <label >FOOD NAME</label>
   		                    <input type="text" name="food_name" class="form-edit" required><br><br>

   		                    <label>PRICE</label>
   		                    <input type="text" name="food_price" class="form-edit" required><br><br>
                
                            <label >IMAGE:</label>
   		                    <input type="file" name="food_image" class="form-edit" required><br><br>
                    </fieldset>
                </div>
                <ul id="loginsign">
                        <li><button type="submit" name="update" class="btn" >ADD</button></li>
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