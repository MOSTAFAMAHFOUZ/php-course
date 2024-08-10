<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="messages.php">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="posts.php">Posts</a>
        </li>
        <?php if(isset($_SESSION['user'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php endif;?>
  
      </ul>

      <ul class="navbar-nav  ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="mode.php">
            <?php if(isset($_COOKIE['mode']) && $_COOKIE['mode'] == "dark"): ?>
                Light
              <?php else: ?>
                Dark
              <?php endif; ?>
            </a>
        
        </li>
      </ul>
    </div>
  </div>
</nav>

