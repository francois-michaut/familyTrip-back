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
    'home-page'
);

$match = $router->match();

if ( $match )
{
    $controllerToUse = '\\Controller\\' . 'Maincontroller' ;
    $methodToUse = $match['target']['action'];
} else 
{
    $controllerToUse = '\\Controller' . 'Maincontroller';
    $methodToUse = 'err404';
}

$controller = new $controllerToUse();
$controller->$methodToUse;