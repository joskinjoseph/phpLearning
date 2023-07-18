<?php

    require 'function.php';

    // require 'router.php';

    // connect to our MySQL databass
   
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
   $pdo = new PDO($dsn, 'oluwadamilare', '12345@Oluwadamilare');

   $pdo->prepare("select * from posts");
   $statement->execute();

   $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

   foreach ($post as $post) {
    echo "<li>" . $post['title'] .  "</li>";
   }