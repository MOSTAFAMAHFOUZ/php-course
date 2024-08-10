<?php

session_start();

require_once '../inc/connection.php';
$name = $_POST['category_name'];
$id = $_GET['id'];

$sql = "UPDATE `categories` SET `name` = '$name' WHERE `id` = '$id'";

$result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "data updated successfully" ;
}

header("Location:../index.php");

die;