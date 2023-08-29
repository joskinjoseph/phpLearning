<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/function.php';

spl_autoload_register (function ($class) {
  str_replace('\\', DIRECTORY_SEPARATOR, $class);
   require base_path("Core/" . $class. '.php');
});

require base_path('Core/router.php');
