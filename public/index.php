<?php

// Outils Composer
require __DIR__ . '//../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath( $_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'action' => 'home',
        'controller' => 'MainController'
    ],
    'home'
);
$router->map(
    'GET',
    '/activity',
    [
        'action' => 'activity',
        'controller' => 'MainController'
    ],
    'activity'
);

$match = $router->match();

if ( $match )
{
    $controllerToUse = '\\FamilyTrip\\Controllers\\' . $match['target']['controller'] ;
    $methodToUse = $match['target']['action'];
} else 
{
    $controllerToUse = '\\FamilyTrip\\Controllers\\' . 'MainController';
    $methodToUse = 'err404';
}

$controller = new $controllerToUse();
$controller->$methodToUse();