<html>
    <head>
        <meta charset="utf-8">
        <title>JUNKTION MENU PAGE</title>
        <link rel="stylesheet" href="JUNKTION.CSS">
    </head>
    <body>
        <div class="headr container-one">
            <header>
                <img src="logo/junktion2.png" class="logo">
                <ul class="menu-bar">
                    <li><a href="JUNKTION.html" title ="This will take you to the Homepage"class="navlinks">HOME</a></li>                                        
                    <li><a href="JUNKTIONMENUPAGE.HTML" title="This will take you to our menu page" class="navlinks">MENU</a></li>     
                    <li><a href="JUNKTIONCONTACTS.HTML" title="This shows you our contacts"class="navlinks">CONTACT US</a></li>                                        
                    <li><a href="JUNKTIONHELPPAGE.HTML" title="Help page"class="navlinks">HELP</a></li>                                                               
                </ul>
            </header>
        </div>
        <div class="container-one" id="bgpic5">
            <h1 class="Headings font-4" style="text-align:center">OUR MENU</h1>
            <div class="row">
                <div class="order-column">
                    <?php
                    require("JUNKTIONLOGINCONNECT.php");
                    $sql_select="SELECT * from FOOD";
                    $result=$conn->query($sql_select);
                    $row=$result->fetch_assoc();
                    echo '
                    <fieldset style="border:2px solid white">
                        <legend>Main dishes</legend>

                            <h3>Meat</h3>
                                <ul>
                                    <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                    <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                    $row=$result->fetch_assoc();

                                    echo '

                                    <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                    <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                    $row=$result->fetch_assoc();                             
                                    
                                    echo '

                                    <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                    <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                    $row=$result->fetch_assoc();
                                    echo ' 
                                </ul>
                            <H3>Burgers</H3>
                                <ul>

                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '

                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '

                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo'
                                </ul>
                            <h3>Pizza</h3>
                                <ul>
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo'

                                    <h4>Pizza sizes</h4>

                                    <li>small.............600</li><br>
                                    <li>medium........800</li><br>
                                    <li>large...........1000</li><br>
                                    <li>Mega-size...1200</li><br>
                                </ul>
                    </fieldset>
                </div>
                <div class="order-column">
                    <fieldset style="border:2px solid white;">
                        <legend>Accompaniments</legend>
                        <h4>All Accompaniments are free provided that they are ordered along side a main dish</h4>
                            <ul>
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            </ul>
                    </fieldset>
                    <fieldset style="border:2px solid white">
                        <legend>Salads</legend>
                            <ul>
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                            <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                            $row=$result->fetch_assoc();
                            echo '
                            </ul>
                    </fieldset>
                </div>
                <div class="order-column">
                    <fieldset style="border:2px solid white">
                        <legend>Drinks</legend>
                                <h4>Soda</h4><br>
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <h4>Wine(Sold by the bottle)</h4>
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <h4>Juice</h4>
                                 <h4>All juices cost 150 shillings</h4>
                                 <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                $row=$result->fetch_assoc();
                                echo '
                                <li><img src="images/'.$row['Foodimage'].'" class="menuphotos"></li><br>
                                <li>'.$row['Foodname'].'..................'.$row['Foodprice'].'</li><br>';
                                echo'
                     </fieldset>
                    ';
                    ?>
                </div>
            </div>
            <ul id="logsign">
                <li><a href="#" title="This lets you order the food you want from the menu"class="logsignlinks">ORDER</a></li>
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