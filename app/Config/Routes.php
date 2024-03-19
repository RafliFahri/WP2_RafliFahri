<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tugas Pertemuan 2
$routes->get('/penjumlahan', 'Latihan1::index');
$routes->get('/penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');