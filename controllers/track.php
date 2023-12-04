<?php

$config = require base_path('config.php');

$db = new Database($config['database']);

$heading = 'tracks';
$currentUserId = 1;

$track = $db->query('select * from artistes  where  id = :id', [
    'id' => $_GET['id']
])->fetch();


authorize($track ['user_id'] === $currentUserId);


view ("tracks/show.view.php");
