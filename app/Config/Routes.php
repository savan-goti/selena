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
    $routes->match(['get', 'post'],'backend/dashboard', 'backend\Admin::index');
    $routes->match(['get', 'post'],'backend/system_setting', 'backend\Admin::system_setting');
    $routes->match(['get', 'post'],'backend/change_login_password', 'backend\Admin::change_login_password');
    
    // Users
    $routes->match(['get', 'post'],'backend/users', 'backend\Users::index');
    $routes->post('backend/users/getAjaxListData', 'backend\Users::getAjaxListData');
    $routes->match(['get', 'post'],'backend/users/add', 'backend\Users::add');
    $routes->match(['get', 'post'],'backend/users/edit/(:num)', 'backend\Users::add/$1');
    $routes->post('backend/users/change_user_status', 'backend\Users::change_user_status');
    $routes->post('backend/users/delete', 'backend\Users::delete');

    //Banner
    $routes->match(['get', 'post'],'backend/banner', 'backend\Banner::index');
    $routes->post('backend/banner/getAjaxListData', 'backend\Banner::getAjaxListData');
    $routes->match(['get', 'post'],'backend/banner/add', 'backend\Banner::add');
    $routes->match(['get', 'post'],'backend/banner/edit/(:num)', 'backend\Banner::add/$1');
    $routes->post('backend/banner/change_status', 'backend\Banner::change_status');
    $routes->post('backend/banner/delete', 'backend\Banner::delete');

    // Category
    $routes->match(['get', 'post'],'backend/category', 'backend\Category::index');
    $routes->post('backend/category/getAjaxListData', 'backend\Category::getAjaxListData');
    $routes->match(['get', 'post'],'backend/category/add', 'backend\Category::add');
    $routes->match(['get', 'post'],'backend/category/edit/(:num)', 'backend\Category::add/$1');
    $routes->post('backend/category/change_status', 'backend\Category::change_status');
    $routes->post('backend/category/delete', 'backend\Category::delete');


});


$routes->get('login', 'Home::login');

