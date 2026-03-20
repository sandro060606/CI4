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
$routes->get('/clientes/index', 'Cliente::index');
$routes->get('/clientes/registrar', 'Cliente::create');
$routes->post('/clientes/guardar', 'Cliente::registrarCliente');
$routes->get('/clientes/eliminar/(:num)', 'Cliente::eliminar/$1');
$routes->get('/clientes/buscar/', 'Cliente::buscar');
$routes->get('clientes/buscar/(:num)', 'Cliente::buscar/$1');
$routes->post('/clientes/actualizar', 'Cliente::actualizar');

$routes->get('/proovedores', 'Proovedor::index');
$routes->get('/productos', 'Producto::index');

//Rutas para Reportes
$routes->get('/reporte_diario', 'Reporte::diario');
$routes->get('/reporte_semanal', 'Reporte::semanal');
$routes->get('/reporte_mensual', 'Reporte::mensual');
$routes->get('/reporte_personalizado', 'Reporte::personalizado');