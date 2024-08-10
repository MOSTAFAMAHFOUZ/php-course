<?php session_start(); ?>
<?php require_once 'inc/header.php'; ?>


<?php

require_once 'inc/connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `categories` WHERE `id` = '$id'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// var_dump($row);
// die;



?>

    <h1> Update Category</h1>

    <div class="conatainer">
        <div class="row">
            <div class="col-8 mx-auto">
                <div>
                    <?php if(isset($_SESSION['success'])): ?>
                        <h3 class="text-success text-center"><?= $_SESSION['success']; ?></h3>
                    <?php endif; ?>
                </div>
                <form action="controllers/update.php?id=<?php echo $row['id']; ?>" method="POST" class="border p-3">
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="category_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="form-control bg-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'inc/footer.php'; ?>
