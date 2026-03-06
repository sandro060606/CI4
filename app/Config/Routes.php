<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/programador', 'Carreras::showIngeneria');
$routes->get('/marketing', 'Carreras::showDesign');