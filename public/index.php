<?php

require "../helpers.php";

require basePath('Router.php');
require basePath('Database.php');

// Instantiate the router
$router = new Router();

// Get Routes
$routes = require basePath('routes.php');

// Get current request and method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];


// route request and method to router
$router->route($uri, $method);
