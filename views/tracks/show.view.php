<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>
  
    <p><?= $track['music']. ' by ' . $track['artiste'];?> </p>
    <p>  <a href="/tracks">Go Back</a></p>
    <li>     
            <?= htmlspecialchars($track['music'])?>
    </li>
    <?php require base_path('partials/footer.php');?>