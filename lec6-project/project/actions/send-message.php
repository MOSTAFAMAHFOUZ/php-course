<?php 
session_start();

include('../inc/functions.php'); 

?>

<?php 


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $_SESSION['user'] = [
      "name" => $name,
      "email" => $email,
      "message" => $message
    ];

    file_put_contents("../data/messages.txt","$name , $email , $message \n",FILE_APPEND);
}

header("Location:../contact.php");

