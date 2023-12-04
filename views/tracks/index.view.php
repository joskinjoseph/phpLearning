<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>
<p>List of Songs</p>
<?php foreach ($tracks as $track) :?>
    <li>
        <a href="/track?id=<?= $track['id'] ?>">
            <?= htmlspecialchars($track['tracks']) ?>
        </a>
    </li>
<?php endforeach; ?>
<hr>
<p><a href="/track/create">Create New Note</a></p>
<?php require base_path('views/partials/footer.php'); ?>
