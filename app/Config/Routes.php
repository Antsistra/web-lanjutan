<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/forgot-password', 'LoginController::forgotPassword');
$routes->get('/register', 'LoginController::register');
