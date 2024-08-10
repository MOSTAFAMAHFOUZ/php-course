<?php 
session_start();
include('inc/functions.php'); ?>
<?php include('inc/header.php'); ?>
<?php require('inc/nav.php'); ?>





  <h1>Contact Page</h1>
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto border p-2">
        <?php if(isset($_SESSION['user'])): ?>
        <h2><?php echo $_SESSION['user']['name']; ?></h2>
        <h2><?php echo $_SESSION['user']['email']; ?></h2>
        <h2><?php echo $_SESSION['user']['message']; ?></h2>
        <?php endif;?>
        <form action="actions/send-message.php" method="POST">
          <div class="mb-3">
            <label for=""> Name</label>
            <input type="text" name="name" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for=""> Email</label>
            <input type="email" name="email" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for=""> Message</label>
            <textarea name="message" id="" class="form-control" rows="7"></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Send Message" id="" class="form-control bg-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include('inc/footer.php'); ?>

