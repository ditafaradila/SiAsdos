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
$routes->get('/admin_login', 'LoginAdmin::index');
$routes->post('/login/process', 'LoginAdmin::process');
$routes->get('/logout', 'LoginAdmin::logout');

$routes->get('/asdos_login', 'LoginAsdos::index');
$routes->post('/login/processs', 'LoginAsdos::processs');
$routes->get('/logout', 'LoginAsdos::logout');

$routes->get('/mhs_login', 'MhsLogin::index');
$routes->post('/login/proces', 'MhsLogin::proces');
$routes->get('/logout', 'MhsLogin::logout');
//$routes->get('/PMmateri', 'MhsLogin::indexx');

$routes->get('/Ashome', 'AsdosController::index');

$routes->get('/profile', 'Profile::index');
$routes->get('/editProfile', 'Profile::update');

$routes->get('/PMmateri', 'MateriController::mahasiswa');

$routes->get('/Nilai', 'Nilaicontrol::Nilai');
$routes->post('/buat', 'Nilaicontrol::buat');
$routes->get('/tambah', 'Nilaicontrol::tambah');
$routes->get('/pagesNilai', 'Nilaicontrol::index');
$routes->get('/editNilai/(:num)', 'NilaiControl::edit/$1');
$routes->post('/ubah/(:num)', 'Nilaicontrol::ubah/$1');
$routes->delete('/deleteNilai/(:num)', 'NilaiControl::delete/$1');
$routes->get('/PengumumanLain', 'Nilaicontrol::PengumumanLain');
$routes->get('/', 'Home::index');

//PengumumanControl
$routes->post('/create', 'PengumumanControl::create');
$routes->get('/store', 'PengumumanControl::store');
$routes->get('/pages', 'PengumumanControl::index');
$routes->get('/edit/(:num)', 'PengumumanControl::edit/$1');
$routes->post('/update/(:num)', 'PengumumanControl::update/$1');
$routes->delete('/delete/(:num)', 'PengumumanControl::delete/$1');
$routes->get('/PengumumanLain', 'PengumumanControl::PengumumanLain');

//JadwalController
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

//pengumuman asdos
$routes->get('pengumuman', 'PengumumanController::index');
$routes->get('/createP', 'PengumumanController::createP');
$routes->post('/storeP', 'PengumumanController::storeP');
$routes->get('editP/(:num)', 'PengumumanController::editP/$1');
$routes->post('updateP/(:num)', 'PengumumanController::updateP/$1');
$routes->get('deleteP/(:num)', 'PengumumanController::deleteP/$1');

//absen Asdos
$routes->get('/absen', 'AbsenController::index');
$routes->get('/absenSelesai', 'AbsenController::absenSelesai');
$routes->get('/CAbsen', 'AbsenController::createAbsen');
$routes->post('/simpanAbsen', 'AbsenController::simpanAbsen');
$routes->get('/EAbsen/(:num)', 'AbsenController::editAbsen/$1');
$routes->post('/updateAbsen/(:num)', 'AbsenController::updateAbsen/$1');

//absen Mahasiswa
$routes->get('/absenMhs', 'AbsenMhsController::index');
$routes->get('/absenSelesaiMhs', 'AbsenMhsController::absenSelesaiMhs');
$routes->get('/CAbsenMhs', 'AbsenMhsController::createAbsenMhs');
$routes->post('/simpanAbsenMhs', 'AbsenMhsController::simpanAbsenMhs');
$routes->get('/EAbsenMhs/(:num)', 'AbsenMhsController::editAbsenMhs/$1');
$routes->post('/updateAbsenMhs/(:num)', 'AbsenMhsController::updateAbsenMhs/$1');

$routes->get('/materi', 'MateriController::index');
$routes->get('/Cmateri', 'MateriController::Create');
$routes->post('/Store', 'MateriController::Store');
$routes->get('/Emateri/(:num)', 'MateriController::Edit/$1');
$routes->post('/Update/(:num)', 'MateriController::Update/$1');
$routes->delete('/Delete/(:num)', 'MateriController::Delete/$1');
$routes->post('/Download/(:num)', 'MateriController::Download/$1');

$routes->get('/pendaftarAsdos', 'Pendaftaran::viewPendaftar');
$routes->get('/daftarAsdos', 'Pendaftaran::index');
$routes->post('/simpanDaftar','Pendaftaran::simpanDaftar');

$routes->get('/(:any)', 'Pages::view/$1');
$routes->get('/(:any)', 'PagesAsdos::view/$1');
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
