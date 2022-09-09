<?php

// Outils Composer
require __DIR__ . '//../vendor/autoload.php';

$router = new AltoRouter();


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods:  OPTIONS, GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else { // sinon
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}
$router->map(
    'GET',
    '/',
    [
        'action' => 'home',
    'controller' => 'Admin\MainController'
    ],
    'home'
);
$router->map(
    'GET',
    '/activity',
    [
        'action' => 'activity',
        'controller' => 'Admin\MainController'
    ],
    'activity'
);
$router->map(
    'GET',
    '/activity/Edit',
    [
        'action' => 'activityEdit',
        'controller' => 'Admin\MainController'
    ],
    'activityEdit'
);
$router->map(
    'GET',
    '/shoppinglist',
    [
        'action' => 'shoppinglist',
        'controller' => 'Admin\MainController'
    ],
    'shoppinglist'
);
$router->map(
    'GET',
    '/remember',
    [
        'action' => 'remember',
        'controller' => 'Admin\MainController'
    ],
    'remember'
);
$router->map(
    'GET',
    '/tribe',
    [
        'action' => 'tribe',
        'controller' => 'Admin\MainController'
    ],
    'tribe'
);
$router->map(
    'GET',
    '/user',
    [
        'action' => 'user',
        'controller' => 'Admin\MainController'
    ],
    'user'
);
$router->map(
    'GET',
    '/Api/members',
    [
        'action' => 'getUsers',
        'controller' => 'Api\UserController'
    ],
    'members'
);
$router->map(
    'POST',
    '/Api/createRememberPost',
    [
        'action' => 'rememberPost',
        'controller' => 'Api\RememberController'
    ],
    'rememberCreationPost'
);
$router->map(
    'POST',
    '/Api/createShoppingListPost',
    [
        'action' => 'shoppingListPost',
        'controller' => 'Api\ShoppingListController'
    ],
    'shoppingListCreationPost'
);
$router->map(
    'POST',
    '/Api/createTribePost',
    [
        'action' => 'postTribeNamePost',
        'controller' => 'Api\TribeController'
    ],
    'tribeCreationPost'
);
$router->map(
    'POST',
    '/Api/createActivityPost',
    [
        'action' => 'activityPost',
        'controller' => 'Api\ActivityController'
    ],
    'activityCreationPost'
);
$router->map(
    'POST',
    '/Api/userPost',
    [
        'action' => 'userPost',
        'controller' => 'Api\UserController'
    ],
    'userCreationPost'
);
$router->map(
    'GET',
    '/Api/tribes',
    [
        'action' => 'getTribes',
        'controller' => 'Api\TribeController'
    ],
    'tribesList'
);


$match = $router->match();

if ( $match )
{
    $controllerToUse = '\\FamilyTrip\\Controllers\\' . $match['target']['controller'] ;
    $methodToUse = $match['target']['action'];
} else 
{
    $controllerToUse = '\\FamilyTrip\\Controllers\\' . 'Admin\MainController';
    $methodToUse = 'err404';
}

$controller = new $controllerToUse();
$controller->$methodToUse();