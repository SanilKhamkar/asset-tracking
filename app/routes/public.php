<?php
/*
|--------------------------------------------------------------------------
| Valid Routes for Site
|--------------------------------------------------------------------------
*/

// $routes->get('/', function(){
//     return App::view('home');
// });

$routes->get('/home', [DriverController::class, 'index']);
$routes->post('/home', [DriverController::class, 'index']);

// Check if valid route
$routes->checkRoute();
