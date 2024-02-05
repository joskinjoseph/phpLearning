<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container p {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 18px;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"] {
    width: calc(100% - 10px);
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form-group input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
}

.form-group input[type="submit"]:hover {
    background-color: #0056b3;
}
.error-message {
        color: #e74c3c;
        margin-top: 8px;
    }

</style>

<div class="container">
    <p>Register for a new account</p>
    <form action="/register" method="post">
       
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <?php if (isset($errors['email'])): ?>
            <p class="error-message"><?= $errors['email']; ?></p>
        <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <?php if (isset($errors['password'])): ?>
            <p class="error-message"><?= $errors['pasword']; ?></p>
        <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
</div>

<?php require base_path('views/partials/footer.php'); ?>
