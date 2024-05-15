<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tugas Pertemuan 6 Di-Lemas
$routes->get('/dilemas', 'DiLemas::index');
$routes->post('/dilemas/create', 'DiLemas::create');
$routes->post('/dilemas/update', 'DiLemas::update');
$routes->delete('/dilemas/delete/(:num)', 'DiLemas::delete/$1');