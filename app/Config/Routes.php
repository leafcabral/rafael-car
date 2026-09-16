<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CarroController::index');
$routes->get('/atividade1/login', 'AtividadeBootStrap::login');
$routes->get('/atividade1/profile', 'AtividadeBootStrap::profile');
$routes->get('/atividade1/product', 'AtividadeBootStrap::product');
