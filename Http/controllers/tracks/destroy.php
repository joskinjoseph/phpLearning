<?php
use Core\App;
use Core\Database;
error_reporting(E_ALL);
ini_set('display_errors', 1);
$db = App::resolve(Database::class);
$currentUserId = 1;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $track = $db->query('SELECT * from artistes  where  id = :id', [
        'id' => $_POST['id'],
    ])->fetch();
    authorize($track['user_id'] === $currentUserId);
    $db->query('DELETE  from artistes where id = :id', [
        'id' => $_POST['id'],
    ]);
    header('location: /tracks');
    exit();
} else {

    $heading = 'Tracks';
 
    $track = $db->query('SELECT * from artistes  where  id = :id', [
        'id' => $_GET['id'],
    ])->fetch();
    authorize($track['user_id'] === $currentUserId);
    view("tracks/show.view.php", [
        'heading' => $heading,
        'track' => $track,
    ]);
}