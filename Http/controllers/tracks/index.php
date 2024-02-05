<?php
use Core\Database;
use Core\App;
error_reporting(E_ALL);
ini_set('display_errors', 1);
$db = App::resolve(Database::class);
$tracks = $db->query('select * from artistes')->fetchAll();
view('tracks/index.view.php', [
    'heading' => 'My Tracks',
    'tracks' => $tracks
]);
