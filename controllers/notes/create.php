<?php

error_review();

require base_path('Validator.php');

$config = require base_path('config.php');

$db = new Database($config['database']);


    $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required';
    }

  

    if (empty($error)) {
        $db->query('INSERT INTO notes(body, id, user_id) VALUES(:body, :id, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
            'id' => 3,
        ]);

    }

}

view("notes/create.view.php", [
    'heading' => 'Create Notes',
    'errors' => $errors
]);


