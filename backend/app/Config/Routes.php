<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::loginPage');
$routes->get('/signup', 'Users::signupPage');
$routes->get('/moodboard', 'Users::moodboard');
