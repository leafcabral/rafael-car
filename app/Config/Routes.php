<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CarroController::index');
// $routes->get('/vitrine', 'CarroController::index');
$routes->get('/rota-legal', 'RotaLegal::index');
$routes->get('/rota-do-mal', 'RodaDoMal::index');
$routes->get('/rota-2', 'Rota2::index');
