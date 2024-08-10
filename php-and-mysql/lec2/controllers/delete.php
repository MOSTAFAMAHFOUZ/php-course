<?php 
session_start();
require_once '../inc/connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM `categories` WHERE `id` = '$id'";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "data deleted successfully" ;
}


header("Location:../index.php");
