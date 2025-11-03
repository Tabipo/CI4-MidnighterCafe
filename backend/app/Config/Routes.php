<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::loginPage');
$routes->get('/signup', 'Users::signupPage');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/adminDashboard', 'Users::adminDashboard');
$routes->get('/adminMenu', 'Users::adminMenu');
$routes->get('/adminOrder', 'Users::adminOrder');
$routes->get('/adminAccount', 'Users::adminAccount');
$routes->get('/userAccount', 'Users::userAccount');
