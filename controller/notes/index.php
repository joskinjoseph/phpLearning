<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Core\Database;
$config = require base_path('config.php');
$db = new Database($config['database']);
$heading = "My Notes";
$notes = $db->query('select * from notes where user_id = 1')->get();
views('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes
]);
