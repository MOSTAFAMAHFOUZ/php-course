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

  }
//   header("Refresh:3;url=../contact.php");

header("Location:../contact.php");


  ?> 


<?php /*if(isset($user)): ?>
            <h3><?= $user['name']; ?></h3>
            <h3><?= $user['email']; ?></h3>
            <h3><?= $user['message']; ?></h3>
        <?php endif;  */?>

