<?php 
session_start();

require_once '../inc/connection.php';

$name = $_POST['category_name'];
$sql = "INSERT INTO `categories`(`name`) VALUES('$name')";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "data inserted successfully" ;
}

header("Location:../create.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
