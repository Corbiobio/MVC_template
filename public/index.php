<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new MVC\Router($_SERVER["REQUEST_URI"]);

//home get
$router->get('/', "UserController@showPage");

//home post
$router->post('/', "UserController@showPage");


$router->run();
