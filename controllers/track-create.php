<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Validator.php';

$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Create track';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $error = [];


    if (! Validator::string($_POST['body'], 1, 1000)) {
        $error['body'] = 'A body of no more than 1,000 characters is required';
    }
    if (empty($error)) {
        $db->query('INSERT INTO tracks(body, id, user_id) VALUES(:body, :id, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
            'id' => 3,
        ]);

    }

}

require 'views/track-create.view.php';
