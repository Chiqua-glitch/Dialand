<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Darland\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "DarlandController@index");
$router->get('/login', "UserController@showLogin");
$router->get('/register', "UserController@showregister");
$router->get('/logout', "UserController@logout");

$router->post('/register', "UserController@register");
$router->post('/login', "UserController@login");

$router->run();
