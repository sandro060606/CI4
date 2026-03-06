<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index');
$routes->get('/programador', 'Carrera::showIngeneria');
$routes->get('/marketing', 'Carrera::showDesign');

//Nuevas Rutas para navegar en Dashboard
$routes->get('/clientes', 'Cliente::index');
$routes->get('/proovedores', 'Proovedor::index');
$routes->get('/productos', 'Producto::index');

//Rutas para Reportes
$routes->get('/reporte_diario', 'Reporte::diario');
$routes->get('/reporte_semanal', 'Reporte::semanal');
$routes->get('/reporte_mensual', 'Reporte::mensual');
$routes->get('/reporte_personalizado', 'Reporte::personalizado');