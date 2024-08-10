<?php session_start(); ?>
<?php include('inc/header.php'); ?>
<?php require('inc/nav.php'); ?>
<?php 

    $file = fopen("data/messages.txt","a+");

?>
  <h1>Messages Page</h1>
  <div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php while($user = fgets($file)): ?>
                    <?php $row = explode("," , $user); ?>
                <tr>
                    <td><?= $row[0]; ?></td>
                    <td><?= $row[1]; ?></td>
                    <td><?= $row[2]; ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
  </div>
<?php include('inc/footer.php'); ?>

