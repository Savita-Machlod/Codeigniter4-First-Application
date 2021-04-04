<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('students', 'StudentController::index'); //student-table

$routes->get('sellers', 'SellerController::index'); //sellers-table-view
$routes->get('sellers/create', 'SellerController::create'); //sellers-table-insert
$routes->post('sellers/add', 'SellerController::store'); //sellers-table-insert
$routes->get('seller/edit/(:num)', 'SellerController::edit/$1'); //sellers-table-edit
$routes->put('seller/update/(:num)', 'SellerController::update/$1'); //sellers-table-update
$routes->get('seller/delete/(:num)', 'SellerController::delete/$1'); //sellers-table-delete

$routes->get('products', 'ProductController::index'); //products-table
$routes->get('products/create', 'ProductController::create'); //products-table-insert
$routes->post('products/add', 'ProductController::store'); //products-table
$routes->get('product/edit/(:num)', 'ProductController::edit/$1'); //products-table-edit
$routes->put('product/update/(:num)', 'ProductController::update/$1'); //products-table-update
$routes->get('product/delete/(:num)', 'ProductController::delete/$1'); //products-table-delete


//$routes->get('products', 'ProductController::index');

//$routes->get('products/(:any)', 'ProductController::find/$1');

// $routes->group('users', function($routes)
// {
// 	$routes->get('profile', function(){
// 		return "I am user profile.";
// 	});
// 	$routes->get('orders', function(){
// 		return "I am user orders.";
// 	});
//     // $routes->get('profile', 'ProductController::profile');
//     // $routes->get('order', 'ProductController::order');
// });


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
