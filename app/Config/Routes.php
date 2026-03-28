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
//Clientes
$routes->get('/clientes', 'Cliente::index');
$routes->get('/clientes/registrar', 'Cliente::create');
$routes->post('/clientes/guardar', 'Cliente::registrarCliente');
$routes->get('/clientes/eliminar/(:num)', 'Cliente::eliminar/$1');
$routes->get('/clientes/buscar/(:num)', 'Cliente::buscar/$1');
$routes->post('/clientes/actualizar', 'Cliente::actualizar');

//Proovedores
$routes->get('/proovedores', 'Proovedor::index');
$routes->get('/proovedores/registrar', 'Proovedor::create');
$routes->post('/proovedores/guardar', 'Proovedor::registrarProovedor');
$routes->get('/proovedores/eliminar/(:num)', 'Proovedor::eliminar/$1');
$routes->get('/proovedores/buscar/(:num)', 'Proovedor::buscar/$1');
$routes->post('/proovedores/actualizar', 'Proovedor::actualizar');

//Productos
$routes->get('/productos', 'Producto::index');
$routes->get('/productos/registrar', 'Producto::create');
$routes->post('/productos/guardar', 'Producto::registrarProducto');
$routes->get('/productos/eliminar/(:num)', 'Producto::eliminar/$1');
$routes->get('/productos/buscar/(:num)', 'Producto::buscar/$1');
$routes->post('/productos/actualizar', 'Producto::actualizar');

//TAREA 03 | Rutas para Producto X
$routes->get('/productosX', 'ProductoX::index');
$routes->get('/productosX/listar','ProductoX::getProductosX');

//Vehiculos
$routes->get('/vehiculos', 'Vehiculo::index');
$routes->get('/vehiculos/listar','Vehiculo::getVehiculos');
$routes->post('/vehiculos/registrar', 'Vehiculo::registrarVehiculo');

//Marcas
$routes->get('/marcas/listar', 'Marca::getMarcas');

//Rutas para Reportes
$routes->get('/reporte_diario', 'Reporte::diario');
$routes->get('/reporte_semanal', 'Reporte::semanal');
$routes->get('/reporte_mensual', 'Reporte::mensual');
$routes->get('/reporte_personalizado', 'Reporte::personalizado');