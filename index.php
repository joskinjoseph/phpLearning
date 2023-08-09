<?php

require 'function.php';

   require 'Database.php';
//     // require 'router.php';

$config = require('config.php');

$db = new Database($config ['database']);

$id = $_GET['id'];

$querry = "select * from man where id = :id";

$posts = $db->querry($querry, [':id' => $id])->fetchAll();

$id = 1;

dd($posts);

