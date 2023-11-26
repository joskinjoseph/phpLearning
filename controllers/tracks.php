<?php



$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'My tracks'; 

$tracks = $db->query('select * from tracks where user_id = 1;')->get();



require "views/tracks.view.php";

