<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tugas Pertemuan 3
$routes->get('/web', 'Web::index');
$routes->get('/web/about', 'Web::about');