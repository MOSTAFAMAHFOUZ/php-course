<?php session_start(); ?>
<?php require_once 'inc/header.php'; ?>

    <h1> Insert New Category</h1>

    <div class="conatainer">
        <div class="row">
            <div class="col-8 mx-auto">
                <div>
                    <?php if(isset($_SESSION['success'])): ?>
                        <h3 class="text-success text-center"><?= $_SESSION['success']; ?></h3>
                    <?php endif; ?>
                </div>
                <form action="controllers/store.php" method="POST" class="border p-3">
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="category_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="form-control bg-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'inc/footer.php'; ?>
