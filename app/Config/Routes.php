<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index');
$routes->get('/programador', 'Carrera::showIngeneria');
$routes->get('/marketing', 'Carrera::showDesign');