<?php

namespace Config;

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
$routes->get('/', 'Home::index');
$routes->get('/adminIndex', 'Pages::login');
$routes->get('/dashboard', 'Pages::dashboard');
$routes->get('/dashboardKonsumen', 'Konsumen::dashboard');
$routes->get('/konsumenIndex', 'Pages::loginKonsumen');
$routes->get('/register', 'Konsumen::register');
$routes->post('/create', 'Konsumen::create');
$routes->post('/auth', 'Admin::auth');
$routes->post('/auth_konsumen', 'Konsumen::auth');
$routes->get('/forgot_password', 'Konsumen::forgot_passsword');
$routes->get('/reservasi', 'Admin::reservasi');
$routes->get('/reservasi_konsumen', 'Konsumen::reservasi');
$routes->get('/logout', 'Pages::logout');
$routes->get('/profil', 'Konsumen::profil');
$routes->get('/editprofil', 'Konsumen::editprofil');
$routes->post('/saveprofil', 'Konsumen::saveprofil');
$routes->get('/createreservasi', 'Konsumen::createreservasi');
$routes->post('/savereservasi', 'Konsumen::savereservasi');
$routes->get('/feedback', 'Konsumen::feedback');
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
