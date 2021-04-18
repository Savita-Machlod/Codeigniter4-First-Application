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
//$routes->setDefaultController('Home');
$routes->setDefaultController('Employees');
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
//$routes->get('/', 'Home::index');

$routes->get('/', 'Employees::index', ['filter' => 'noauth']);
$routes->get('logout', 'Employees::logout');
$routes->match(['get','post'],'register', 'Employees::register', ['filter' => 'noauth']);
$routes->match(['get','post'],'profile', 'Employees::profile',['filter' => 'auth']);
$routes->get('dashboard', 'Dashboard::index',['filter' => 'auth']);

$routes->get('students', 'StudentController::index'); //student-table

$routes->get('sellers', 'SellerController::index',['filter' => 'auth']); //sellers-table-view
$routes->get('sellers/create', 'SellerController::create',['filter' => 'auth']); //sellers-table-insert
$routes->post('sellers/add', 'SellerController::store',['filter' => 'auth']); //sellers-table-insert

//$routes->post('sellers', 'LocationController::store',['filter' => 'auth']); //locations-table-insert

$routes->get('seller/edit/(:num)', 'SellerController::edit/$1',['filter' => 'auth']); //sellers-table-edit
$routes->put('seller/update/(:num)', 'SellerController::update/$1',['filter' => 'auth']); //sellers-table-update

//$routes->post('seller/update/(:num)', 'SellerController::update/$1',['filter' => 'auth']); //sellers-table-update

$routes->get('seller/delete/(:num)', 'SellerController::delete/$1',['filter' => 'auth']); //sellers-table-delete

$routes->get('products', 'ProductController::index',['filter' => 'auth']); //products-table
$routes->get('products/create', 'ProductController::create',['filter' => 'auth']); //products-table-insert
$routes->post('products/add', 'ProductController::store',['filter' => 'auth']); //products-table
$routes->get('product/edit/(:num)', 'ProductController::edit/$1',['filter' => 'auth']); //products-table-edit
$routes->put('product/update/(:num)', 'ProductController::update/$1',['filter' => 'auth']); //products-table-update
$routes->get('product/delete/(:num)', 'ProductController::delete/$1',['filter' => 'auth']); //products-table-delete


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
