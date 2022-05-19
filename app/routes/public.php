<?php
/*
|--------------------------------------------------------------------------
| Valid Routes for Site
|--------------------------------------------------------------------------
*/

// $routes->get('/', function(){
//     return App::view('home');
// });

$routes->get('/', [DriverController::class, 'index']);
// $routes->post('/tester', [TestController::class, 'index']);

// Check if valid route
$routes->checkRoute();
