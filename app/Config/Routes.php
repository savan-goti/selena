<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Backend
$routes->get('/backend', 'backend\Auth::login');
$routes->group('/backend', function ($routes){
    $routes->get('/login', 'backend\Auth::login');
    $routes->post('/login/save', 'backend\Auth::save');
});