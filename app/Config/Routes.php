<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tugas Pertemuan 4
$routes->get('/matakuliah', 'Matakuliah::index', ['as' => 'form-matkul']);
$routes->post('/matakuliah/cetak', 'Matakuliah::cetak');