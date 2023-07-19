<?php

    require 'function.php';

    require 'Database.php';

    // require 'router.php';

   $config = require('config.php');
    
    
    $db = new Database($config['database']);
    
    $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH__ASSOC);

    dd($posts);



   foreach ($post as $post) {
    echo "<li>" . $post['title'] .  "</li>";
   }