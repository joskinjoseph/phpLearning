<?php
use Core\Validator;
use Core\Database;
use Core\App;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require base_path('Core/Validator.php');
$db = App::resolve(Database::class);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentUserId = 1;
    $errors = [];
    if (! Validator::string($_POST['tracks'], 1, 1000)) {
        $errors['tracks'] = 'A body of no more than 1,000 characters is required';
    }
    if (! empty($errors)) {
        view('tracks/create.view.php', [
            'heading' => 'Create a Track',
            'errors' => $errors
        ]);
    }
        $db->query('INSERT INTO artistes(tracks, user_id, artiste) VALUES(:tracks,:user_id, :artiste)', [
            'tracks' => $_POST['tracks'],
            'user_id' => $currentUserId,
            'artiste' => 'Davido'
        ]);
        
        header('location: /tracks');  
        exit();
    } 
