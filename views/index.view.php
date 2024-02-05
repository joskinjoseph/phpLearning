<?php require 'partials/head.php';?> 
<?php require 'partials/nav.php';?>
<?php require 'partials/header.php';?>
  <p>Welcome <?= $_SESSION['user']['email'] ?? 'Guest'?>  to the Home Page</p> 
    <?php require   'partials/footer.php';