<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
view('tracks/create.view.php', [
    'heading' => 'Create a Track',
    'errors' => []
    
]);
