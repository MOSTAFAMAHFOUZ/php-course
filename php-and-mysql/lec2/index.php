<?php session_start(); ?>
<?php require_once 'inc/header.php'; ?>

<?php

require_once 'inc/connection.php';

$sql = "SELECT * FROM `categories`";

$result = mysqli_query($conn, $sql);


?>

    <h1> All Categories</h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
            <div>
                    <?php if(isset($_SESSION['success'])): ?>
                        <h3 class="text-success text-center"><?= $_SESSION['success']; ?></h3>
                        <?php unset($_SESSION['success']);?>
                    <?php endif; ?>
                </div>
                <table class="table table-bordered ">
                    <thead>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['name']; ?></td>
                            <td>
                                <a href="controllers/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require_once 'inc/footer.php'; ?>
