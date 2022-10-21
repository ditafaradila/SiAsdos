<?php

namespace Config;

use function PHPUnit\Framework\any;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//nama pages -> nama function
$routes->post('/create', 'PengumumanControl::create');
$routes->get('/store', 'PengumumanControl::store');
$routes->get('/pages', 'PengumumanControl::index');
$routes->get('/edit/(:num)', 'PengumumanControl::edit/$1');
$routes->post('/update/(:num)', 'PengumumanControl::update/$1');
$routes->delete('/delete/(:num)', 'PengumumanControl::delete/$1');
$routes->get('/PengumumanLain', 'PengumumanControl::PengumumanLain');
$routes->get('/', 'Home::index');
$routes->get('/home', 'JadwalController::index');
$routes->get('/edit/(:num)', 'JadwalController::edit/$1');
$routes->post('/update/(:num)', 'JadwalController::update/$1');
$routes->get('/jadwalPiket', 'JadwalPiketController::index');
$routes->get('/create', 'JadwalPiketController::create');
$routes->post('/store', 'JadwalPiketController::store');
$routes->get('/edit/(:num)', 'JadwalPiketController::edit/$1');
$routes->post('/update/(:num)', 'JadwalPiketController::update/$1');
$routes->delete('/delete/(:num)', 'JadwalPiketController::delete/$1');
$routes->post('/create', 'PengumumanController::create');
$routes->get('pengumuman', 'PengumumanController::index');
$routes->get('/createP', 'PengumumanController::createP');
$routes->post('/storeP', 'PengumumanController::storeP');
$routes->get('editP/(:num)', 'PengumumanController::editP/$1');
$routes->post('updateP/(:num)', 'PengumumanController::updateP/$1');
$routes->get('deleteP/(:num)', 'PengumumanController::deleteP/$1');
$routes->get('/absen', 'AbsenController::index');
$routes->get('/CAbsen', 'AbsenController::CAbsen');
$routes->post('/storeAbsen', 'AbsenController::storeAbsen');

$routes->get('/(:any)', 'Pages::view/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
