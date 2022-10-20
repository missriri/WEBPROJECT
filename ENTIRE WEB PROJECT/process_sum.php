<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"></head>
    <title>ADDITION TABLE INFORMATION</title>
    <link rel="stylesheet" href="process_sum.css">
    <body>
<?php
//include("DBCONNECT2.php");//will output a warning if there is no DBCONNECT2.php and read the rest
require("DBCONNECT2.php");//will output fatal error and stop executing if there is no DBCONNECT2.php
$number1=$_POST["num1"];
$number2=$_POST["num2"];
Echo "<br>";

//insert data
$sql_insert="INSERT INTO Addition(firstnumber,secondnumber)VALUES('$number1','$number2')";

if($conn->query($sql_insert)===TRUE)
    {
        echo "Inserted successfully";
    }
    else
    {
        echo "ERROR ".$conn->error;
    }
    echo"<br>";

    //selecting data
//$sql_select="SELECT record_id,firstnumber,secondnumber FROM Addition";
$sql_select="SELECT * FROM Addition";
$results=$conn->query($sql_select);

/*print_r($results);

if($results->num_rows>0)
{
   $rows=$results->fetch_assoc();
   print_r($rows);
}
if($results->num_rows>0)
{
    while($rows=$results->fetch_assoc())//iterates through the table in the database and fetches all the data as an associative array
    {
        echo"The first number is".$rows["firstnumber"]."<br>";
        $row[]=$rows;//holding in an array
    }
}
echo "<pre>";
print_r($row);//displaying as an array
echo "</pre>";*/

//displaying data on a table
echo "<pre>";
    if($results->num_rows>0)
    {
        echo "<table>";
            echo "<tr>";
                echo"<th>Record ID</th>";
                echo"<th>First number</th>";
                echo"<th>Second number</th>";
            echo"</tr>";
    
        while($rows=$results->fetch_assoc())//iterates through the table in the database and fetches all the data as an associative array
        {
            echo "<tr>";
                echo"<td>".$rows['record_id']."</td>";
                echo"<td>".$rows['firstnumber']."</td>";
                echo"<td>".$rows['secondnumber']."</td>";
            echo"</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo"No records matching your query were found.";
    }
echo "</pre>";








/*function add_number($n1,$n2)
{
    $total=$n1+$n2;
    echo "The addition of these two numbers is ".$total;
    echo "<br>";
}
function subtract($n1,$n2)
{
    $total=$n1-$n2;
    echo "The first number subtract the second number is " .$total;
    echo "<br>";
}
function multiply($n1,$n2)
{
    $total=$n1*$n2;
    echo "The first number multiplied by the second number is ".$total;
    echo "<br>";
}
Function divide($n1,$n2)
{
    $total=$n1/$n2;
    echo "The first number divided by the second number is ".$total;
    echo "<br>";
}

add_number($number1,$number2);
subtract($number1,$number2);
multiply($number1,$number2);
divide($number1,$number2);*/
?>
</body>
</html>