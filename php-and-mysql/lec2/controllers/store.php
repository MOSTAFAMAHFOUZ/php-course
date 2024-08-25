<?php 
session_start();

require_once '../inc/connection.php';

// var_dump($_POST);
// die;
$name = $_POST['category_name'];
$sql = "INSERT INTO `categories`(`name`) VALUES('$name')";
// echo $name;
// die;
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "data inserted successfully" ;
}

header("Location:../create.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// curl -X POST http://127.0.0.1/groups/php-course/php-and-mysql/lec2/controllers/store.php -d category_name=