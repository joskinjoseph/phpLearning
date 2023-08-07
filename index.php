<?php

// require 'function.php';

//   require 'Database.php';
//     // require 'router.php';

//    $config = require('config.php');

//     $db = new Database($config['database']);

//     $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH__ASSOC);

//     dd($posts);

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, 'oluwadamilare', '12345@Oluwadamilare');

$statement = $pdo->prepare("select * from man");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['name'] . "</li>";
}
