<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$config = require base_path('config.php');
$db = new Database($config['database']);
$tracks = $db->query('select * from artistes')->fetchAll();

view('tracks/index.view.php', [
    'heading' => 'My Tracks'
]);
