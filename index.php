<?php

// FRONT CONTROLLER


// 1. General Settings
ini_set('display_errors', 1);
error_reporting(E_ALL);


// 2. Connection of system files

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT .'/components/Db.php');

// 3. Establishing a connection with DB




// 4. Call Routes

$router = new Router();
$router->run();

?>