<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require base_path('Validator.php');

$config = require base_path('config.php');

$db = new Database($config['database']);

$heading = 'Create track';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = [];
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $error['body'] = 'A body of no more than 1,000 characters is required';
    }
    if (empty($error)) {
        $db->query('INSERT INTO artistes(tracks, id, user_id) VALUES(:tracks, :id, :user_id)', [
            'tracks' => $_POST['tracks'],
            'user_id' => 1,
            'id' => 3,
        ]);

    }

}

view('tracks/create.view.php');
