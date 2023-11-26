<?php require 'views/patials/head.php';?> 
<?php require 'views/patials/nav.php';?>
<?php require 'views/patials/header.php';?>
  
<p>List of Songs</p>
<?php foreach ($tracks as $track) :?>
    <li>
        <a href="/track?id= <?= $track['id']?>">
            <?= htmlspecialchars($track['music'])?>
        </a>
    </li>
    <?php endforeach;?>
    <hr>
    <p><a href="/track/create">Create New Note</a></p>
    <?php require 'views/patials/footer.php';?>