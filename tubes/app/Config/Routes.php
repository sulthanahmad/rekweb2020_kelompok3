<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//User
$routes->get('/', 'User::index');
$routes->get('/user/(:num)', 'User::detail/$1');
$routes->get('/profile', 'User::profile');


// Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

// Edit Profile
$routes->get('/editProfile', 'Admin::editProfile');

// Pager Lokasi
$routes->get('/pages/(:num)', 'Pages::index/$1');

// Detail Resto
$routes->get('/detailRes', 'Pages::detailRes');

// Edit Profile
$routes->get('/main', 'Main::main');

//daerah
$routes->get('/daerahView', 'Daerah::daerahView', ['filter' => 'role:admin']);
$routes->get('/daerah', 'Daerah::daerah', ['filter' => 'role:admin']);
$routes->get('/myProfile', 'Admin::myProfile');


//gallery Res
$routes->get('/galleryRes', 'Main::galleryRes');
$routes->get('/mainRes', 'Main::mainRes');

$routes->delete('/admin/daerahView/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);
$routes->delete('/admin/index/(:num)', 'Admin::deleteUser/$1', ['filter' => 'role:admin']);

$routes->get('/admin/daerahEdit/(:segment)', 'Admin::daerahEdit/$1', ['filter' => 'role:admin']);


$routes->get('/admin/editProfile/(:segment)', 'Admin::editProfile/$1');




/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
