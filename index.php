<?php

require 'function.php';

   require 'Database.php';
//     // require 'router.php';

$config = require('config.php');

$db = new Database($config ['database']);
$posts = $db->querry("select * from man")->fetchAll();

dd($posts);

