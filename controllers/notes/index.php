<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


$config = require base_path('config.php');

 $db = new Database($config['database']);


$notes = $db->query('select * from notes where user_id = 1;')->get();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);


