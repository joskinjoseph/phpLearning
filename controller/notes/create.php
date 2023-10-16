<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);
$heading = 'Create Note';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body is required of not more than 1,000 characters is required';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    }
}
views('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors,
]);
