<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'tracks';
$currentUserId = 1;

$track = $db->querry('select * from tracks where  id = :id', [
   
    'id' => $_GET['id']
])->findOrFail();


authorize($track ['user_id'] === $currentUserId);


require "views/track.view.php";
