<?php session_start(); ?>
<?php include('inc/functions.php'); ?>
<?php include('inc/header.php'); ?>
<?php require('inc/nav.php'); ?>
<?php 

// dd($_GET);
$user_id = $_GET['id'];

if(file_exists("data/$user_id.json")){
    $posts_json = file_get_contents("data/$user_id.json");
    $posts = json_decode($posts_json,true);
}else{
    $data = file_get_contents("https://jsonplaceholder.typicode.com/posts?userId=$user_id");
    // dd($data);
    $posts_json = file_put_contents("data/$user_id.json",$data);

    $posts = json_decode($data,true);
}
    

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
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?= $post['userId']; ?></td>
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                    <td><?= $post['body']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>
<?php include('inc/footer.php'); ?>

