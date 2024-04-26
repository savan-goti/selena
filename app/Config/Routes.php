<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Backend
$routes->group('' ,['filter'=>'noauth'], function($routes){
    $routes->match(['get', 'post'],'backend', 'backend\Auth::login');
    $routes->match(['get', 'post'],'backend/login', 'backend\Auth::login');
});

$routes->group('' ,['filter'=>'auth'], function($routes){
    $routes->match(['get', 'post'],'backend/logout', 'backend\Auth::logout');
    $routes->get('backend/dashboard', 'backend\Admin::index');
});


