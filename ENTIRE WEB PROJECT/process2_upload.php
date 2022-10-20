<?php
//require("process_uploadconnect.php");
if(isset($_POST['submitImage']))
{
$file=$_FILES['food-image'];
//$original_file_name=$_FILES['food-image']['name'];

print_r($file);
//print_r($original_file_name);

//$file_tmp_location = $_FILES['food-image']['tmp_name'];
//$file_type= substr($original_file_name, strpos($original_file_name, '.'),strlen($original_file_name));

//print($file_type);

}
?>