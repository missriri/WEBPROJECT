<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sum</title>
    </head>
    <body>
        <form method="post" action="process_sum.php"> <!--the method keyword shows what method is sued either get or post...action links it to a php page where the--> 
            <!--data keyed in will be displayed -->

            <label for="no_1">First number:</label>
            <input type="number" name="num1" id="no_1"><br/> 

            <label for="no_2">Second number:</label>
            <input type="number" name="num2" id="no_2"><br/> 

            <input type="submit" value="Add">                       
        </form>
    </body>
</html>