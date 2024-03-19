<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Tugas Pertemuan 1
$routes->get('/contoh1', 'Contoh1::index');