<?php session_start(); ?>

<?php include('inc/functions.php'); ?>
<?php include('inc/header.php'); ?>
<?php require('inc/nav.php'); ?>
<?php $products = require_once('data/products.php'); ?>

<h1>Shop Page</h1>

<div class="container">
  <div class="row">
    <?php foreach ($products as $product) : ?>
      <div class="col-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="<?= $product['image']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text"><?= $product['description']; ?></p>
            <p class="card-text border my-1 p-2 bg-info">price : <?= $product['price']; ?> $</p>
            <p class="my-3  p-2">
                <?php foreach($product['colors'] as $color): ?>
                    <span class="border m-1 p-2" style="background-color:<?php echo $color;?>"></span>
                 <?php endforeach; ?>

            </p>
            <a href="#" class="btn btn-primary">Show Details</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include('inc/footer.php'); ?>