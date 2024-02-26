<?php
$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listing', 'ListingController@show');


// $router->get('/', 'App/controllers/home.php');
// $router->get('/listings', 'App/controllers/listings/index.php');
// $router->get('/listings/create', 'App/controllers/listings/create.php');
// $router->get('/listing', 'App/controllers/listings/show.php');
