<?php 


// integer
$age = 30;
echo gettype($age);
echo "<br>";

echo PHP_INT_MAX;
echo "<br>";
echo rand(10,500);
// string 
echo "<br>";

$name = "mostafa";
echo gettype($name);
echo "<br>";
// float , duble 
$price = 5.5;
echo gettype($price);
echo "<br>";
// boolean 
$is_confirmed = true;
echo gettype($is_confirmed);
echo "<br>";

// null 
$status = null;
echo gettype($status);
echo "<br>";
// array 
 $students = ["ahmed","ali","aya"];
 echo gettype($students);
echo "<br>";
// object
class User{

}
$user1 = new User();
echo gettype($user1);
echo "<br>";
// resource 
$file = fopen("one.php", "a+");
echo gettype($file);
