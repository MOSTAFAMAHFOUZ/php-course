<?php 
$conn = mysqli_connect("localhost","root","","zay-store");



function getAll($table_name){
    global $conn;
    $sql = "SELECT * FROM `$table_name`";
    return mysqli_query($conn, $sql);
}



function getRow($table_name,$id){
    global $conn;
    $sql = "SELECT * FROM `$table_name` WHERE `id` = '$id'";
    $result =  mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}



function check($sql){
    global $conn;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        return true;
    }
    return false;
}

