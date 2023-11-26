<?php require 'views/patials/head.php';?> 
<?php require 'views/patials/nav.php';?>
<?php require 'views/patials/header.php';?>
  
    <p><?= $track['music']. ' by ' . $track['artiste'];?> </p>
    <p>  <a href="/tracks">Go Back</a></p>
    <li>     
            <?= htmlspecialchars($track['music'])?>
    </li>
    <?php require 'views/patials/footer.php';?>