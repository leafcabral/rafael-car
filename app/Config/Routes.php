<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/rota-legal', 'RotaLegal::index');
$routes->get('/rota-do-mal', 'RodaDoMal::index');
$routes->get('/rota-2', 'Rota2::index');
