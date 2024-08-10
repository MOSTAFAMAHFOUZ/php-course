<?php session_start(); ?>
<?php include('inc/functions.php'); ?>
<?php include('inc/header.php'); ?>
<?php require('inc/nav.php'); ?>
<?php 

    $posts_json = file_get_contents("data/posts.json");
    $posts = json_decode($posts_json,true);

?>
  <h1>Messages Page</h1>
  <div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>ID</th>
                    <th>Tile</th>
                    <th>Body</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?= $post['userId']; ?></td>
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                    <td><?= $post['body']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="show-posts.php?id=<?php echo $post['userId']; ?>">Show</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
<?php include('inc/footer.php'); ?>

