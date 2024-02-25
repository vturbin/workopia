<?php
$router->get('/', 'App/controllers/home.php');
$router->get('/listings', 'App/controllers/listings/index.php');
$router->get('/listings/create', 'App/controllers/listings/create.php');
$router->get('/listing', 'App/controllers/listings/show.php');
