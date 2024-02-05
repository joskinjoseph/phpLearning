<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f7f7f7;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    p {
        font-size: 24px;
        color: #3498db;
        margin-bottom: 20px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: #3498db;
        font-weight: bold;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #1d6fa5;
    }

    hr {
        border: 0;
        height: 1px;
        background-color: #ddd;
        margin: 20px 0;
    }

    .create-link {
        text-decoration: none;
        color: #3498db;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .create-link:hover {
        color: #1d6fa5;
    }
</style>

<div class="container">
    <p>List of Songs</p>
    <ul>
        <?php foreach ($tracks as $track) : ?>
            <li>
                <a href="/track?id=<?= $track['id'] ?>">
                    <?= htmlspecialchars($track['tracks']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <p><a href="/track/create" class="create-link">Create New Note</a></p>
</div>

<?php require base_path('views/partials/footer.php'); ?>
