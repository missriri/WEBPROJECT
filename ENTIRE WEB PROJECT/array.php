<?php
//how to create the arrays
//how to access the arrays
//how to loop/iterate through the array
$fruits=array("apple","banana","oranges","mangoes","pears","grapes");
$fruits2=["apples","pears","bananas"];
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "I am eating an " .$fruits[0];
echo "<br>";
echo count($fruits);
echo "<br>";

$fruit_size=count($fruits);

for($i=0; $i<$fruit_size; $i++)
{
    echo "I am eating the ".$fruits[$i]." fruit";
    echo "<br>";
}
//associative array
$students= array("Andrew"=>"50","Peter"=>"60","Amani"=>"70");
echo "<pre>";
print_r($students);
echo "</pre>";

$students=["Andrew"=>"50","Peter"=>"60","Amani"=>"70"];
$students["Brandon"]=30;
print_r($students);

echo "<br>";

echo "I am ".$students ["Andrew"] ."years old";
echo "<br>";

foreach($students as $key=>$value)
{
    echo "my name is ".$key. " and I am " .$value ." years old";
    echo "<br>";
}
//multi-dimensional array
$people=array
( 
    array("Ankit","Ram","Shaym"),
    array("1_Unnao","2_Trichy","3_rose")
);
echo "<pre>";
print_r($people);
echo "</pre>";

echo "The value at " .$people[0][1];

$data=
[
    "Game of thrones"=>["Jaime Lannister","Jon Snow","Cersei Lannister"],
    "Black mirror"=>["Nanette Cole","Selma","Karin"]

];
echo "<pre>";
print_r($data);
echo "</pre>";
echo "<br>";

echo "<h1>Famous TV series and Actors</h1>";
echo "<br>";

foreach($data as $series =>$actors)
{
    echo "<h2>$series</h2>";
    foreach($actors as $actor_name)
    {
        echo ($actor_name);
        echo "<br>";
    }
}

?>