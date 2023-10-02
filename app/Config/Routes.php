<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\BlogController;

/**
 * @var RouteCollection $routes
 */

 

 $routes->get('/', [\App\Controllers\Home::class, 'index']);


$routes->group('blog', function($routes) 
{
    $routes->get('/', [BlogController::class, 'blog']);
    $routes->get('(:segment)', [BlogController::class, 'category/$1']);
    $routes->get('(:segment)/(:segment)', [BlogController::class, 'article/$1/$2']);
});


service('auth')->routes($routes);