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
// Routes des activités
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
    '/activity/Add',
    [
        'action' => 'activityAdd',
        'controller' => 'Admin\ActivityController'
    ],
    'activityAdd'
);
$router->map(
    'POST',
    '/activity/Add',
    [
        'action' => 'activityAddBdd',
        'controller' => 'Admin\ActivityController'
    ],
    'activityAddBdd'
);
$router->map(
    'GET',
    '/activity/Edit/[i:id]',
    [
        'action' => 'activityEdit',
        'controller' => 'Admin\ActivityController'
    ],
    'activityEdit'
);
$router->map(
    'POST',
    '/activity/Edit/[i:id]',
    [
        'action' => 'activityUpdate',
        'controller' => 'Admin\ActivityController'
    ],
    'activityUpdate'
);
$router->map(
    'GET',
    '/activity/Delete/[i:id]',
    [
        'action' => 'activityDeletePage',
        'controller' => 'Admin\ActivityController'
    ],
    'activityDelete'
);
$router->map(
    'POST',
    '/activity/Delete/[i:id]',
    [
        'action' => 'activityDelete',
        'controller' => 'Admin\ActivityController'
    ],
    'activityWasDelete'
);

// Routes des shoppinglist
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
    '/shoppinglist/Edit/[i:id]',
    [
        'action' => 'shoppinglistEdit',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppinglistEdit'
);
$router->map(
    'POST',
    '/shoppinglist/Edit/[i:id]',
    [
        'action' => 'shoppinglistUpdate',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppinglistEditUpdate'
);
$router->map(
    'GET',
    '/shoppinglist/Delete/[i:id]',
    [
        'action' => 'shoppinglistDeletePage',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppinglistDeletePage'
);
$router->map(
    'POST',
    '/shoppinglist/Delete/[i:id]',
    [
        'action' => 'shoppinglistDelete',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppinglistDelete'
);
$router->map(
    'GET',
    '/shoppinglist/Add',
    [
        'action' => 'shoppinglistAddPage',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppingListAdd'
);

$router->map(
    'POST',
    '/shoppinglist/Add',
    [
        'action' => 'shoppinglistAddPageToBdd',
        'controller' => 'Admin\ShoppingListController'
    ],
    'shoppingListAddBdd'
);

// Routes des Remembers
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
    '/remember/Edit/[i:id]',
    [
        'action' => 'rememberEditPage',
        'controller' => 'Admin\RememberController'
    ],
    'rememberEdit'
);
$router->map(
    'POST',
    '/remember/Edit/[i:id]',
    [
        'action' => 'rememberUpdate',
        'controller' => 'Admin\RememberController'
    ],
    'rememberUpdate'
);

$router->map(
    'GET',
    '/remember/Delete/[i:id]',
    [
        'action' => 'rememberDeletePage',
        'controller' => 'Admin\RememberController'
    ],
    'rememberDelete'
);
$router->map(
    'POST',
    '/remember/Delete/[i:id]',
    [
        'action' => 'rememberDelete',
        'controller' => 'Admin\RememberController'
    ],
    'rememberDeleteBdd'
);
$router->map(
    'GET',
    '/remember/Add',
    [
        'action' => 'rememberAddPage',
        'controller' => 'Admin\RememberController'
    ],
    'rememberAddPage'
);
$router->map(
    'POST',
    '/remember/Add',
    [
        'action' => 'rememberAddBdd',
        'controller' => 'Admin\RememberController'
    ],
    'rememberAddBdd'
);
// Routes des Tribes
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
    '/tribe/Edit/[i:id]',
    [
        'action' => 'tribeEdit',
        'controller' => 'Admin\TribeController'
    ],
    'tribeEdit'
);
$router->map(
    'POST',
    '/tribe/Edit/[i:id]',
    [
        'action' => 'tribeUpdate',
        'controller' => 'Admin\TribeController'
    ],
    'tribeEditUpdate'
);

$router->map(
    'GET',
    '/tribe/Delete/[i:id]',
    [
        'action' => 'tribeDelete',
        'controller' => 'Admin\TribeController'
    ],
    'tribeDelete'
);

$router->map(
    'POST',
    '/tribe/Delete/[i:id]',
    [
        'action' => 'tribeDeleteInBdd',
        'controller' => 'Admin\TribeController'
    ],
    'tribeDeleteBdd'
);

$router->map(
    'GET',
    '/tribe/Add',
    [
        'action' => 'tribeAddPage',
        'controller' => 'Admin\TribeController'
    ],
    'tribeAddPage'
);

$router->map(
    'POST',
    '/tribe/Add',
    [
        'action' => 'tribeAddBdd',
        'controller' => 'Admin\TribeController'
    ],
    'tribeAddBdd'
);

// Routes des Users
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
    '/user/Edit/[i:id]',
    [
        'action' => 'userEditPage',
        'controller' => 'Admin\UserController'
    ],
    'userEditPage'
);

$router->map(
    'POST',
    '/user/Edit/[i:id]',
    [
        'action' => 'userUpdate',
        'controller' => 'Admin\UserController'
    ],
    'userUpdate'
);

$router->map(
    'GET',
    '/user/Delete/[i:id]',
    [
        'action' => 'userDeletePage',
        'controller' => 'Admin\UserController'
    ],
    'userDeletePage'
);
$router->map(
    'POST',
    '/user/Delete/[i:id]',
    [
        'action' => 'userDeleteBdd',
        'controller' => 'Admin\UserController'
    ],
    'userDeleteBdd'
);

$router->map(
    'GET',
    '/user/Add',
    [
        'action' => 'userAdd',
        'controller' => 'Admin\UserController'
    ],
    'userAdd'
);


$router->map(
    'POST',
    '/user/Add',
    [
        'action' => 'userAddToBdd',
        'controller' => 'Admin\UserController'
    ],
    'userAddToBdd'
);
// Routes de l'API
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

$params = $match['params'];

$controller = new $controllerToUse();
$controller->$methodToUse($params);