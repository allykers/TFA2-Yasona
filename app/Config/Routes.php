<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Pages::home');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/about', 'Pages::about');
    $routes->get('/customers', 'Customers::index');
    $routes->get('/customers/new', 'Customers::createForm');
    $routes->post('/customers/create', 'Customers::create');
    $routes->get('/customers/edit/(:num)', 'Customers::edit/$1');
    $routes->post('/customers/update/(:num)', 'Customers::update/$1');

    $routes->get('/users', 'Users::index');
    $routes->get('/users/new', 'Users::createForm');
    $routes->post('/users/create', 'Users::create');
    $routes->get('/users/edit/(:num)', 'Users::edit/$1');
    $routes->post('/users/update/(:num)', 'Users::update/$1');
});