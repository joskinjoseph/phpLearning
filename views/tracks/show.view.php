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

    h2 {
        color: #3498db;
        margin-bottom: 10px;
        font-size: 24px;
    }

    .edit-link {
        text-decoration: none;
        color: #3498db;
        border-bottom: 1px solid #3498db;
        padding-bottom: 2px;
        margin-right: 10px;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .edit-link:hover {
        color: #1d6fa5;
    }

    form {
        display: inline-block;
    }

    button {
        background-color: #e74c3c;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    button:hover {
        background-color: #c0392b;
    }
</style>

<div class="container">
    <p><a href="/tracks">&larr; Go Back</a></p>

    <div>
        <h2><?= htmlspecialchars($track['tracks']) . ' by ' . $track['artiste']; ?></h2>
        
        <a href="/track/edit?id=<?= $track['id']?>" class="edit-link">Edit</a>

        <form method="POST">
            <input type="hidden" name="__method" value="DELETE">
            <input type="hidden" name="id" value="<?= $track['id']?>">
            <button type="submit">DELETE</button>
        </form>
    </div>
</div>

<?php require base_path('views/partials/footer.php');?>
