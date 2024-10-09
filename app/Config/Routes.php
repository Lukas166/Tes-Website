<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::homepage');
$routes->get('/tugas-01', 'Home::tugas1');
$routes->get('/tugas-02', 'Home::tugas2');
$routes->get('/tugas-03a', 'Home::tugas3a');
$routes->get('/tugas-03b', 'Home::tugas3b');
$routes->get('/tugas-04a', 'Home::tugas4a');
$routes->get('/tugas-04b', 'Home::tugas4b');

