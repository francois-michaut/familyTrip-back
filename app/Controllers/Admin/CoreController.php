<?php

namespace FamilyTrip\Controllers\Admin;

abstract class CoreController
{
    public function __construct($routeName = '')
   {
    $acl = [
        'home' => ['user', 'admin', 'superAdmin'] ,
        'login' => ['user', 'admin', 'superAdmin'] ,
        'logout' => ['user', 'admin', 'superAdmin'] ,
       'activity' => ['admin', 'superAdmin'],
       'activityAdd' => ['admin', 'superAdmin'],
       'activityAddBdd' => ['admin', 'superAdmin'],
       'activityEdit' => ['admin', 'superAdmin'],
       'activityUpdate' => ['admin', 'superAdmin'],
       'activityDelete' => ['admin', 'superAdmin'],
       'activityWasDelete' => ['admin', 'superAdmin'],
       'shoppinglist' => ['admin', 'superAdmin'],
       'shoppinglistEdit' => ['admin', 'superAdmin'],
       'shoppinglistEditUpdate' => ['admin', 'superAdmin'],
       'shoppinglistDeletePage' => ['admin', 'superAdmin'],
       'shoppinglistDelete' => ['admin', 'superAdmin'],
       'shoppingListAdd' => ['admin', 'superAdmin'],
       'shoppingListAddBdd' => ['admin', 'superAdmin'],
       'remember' => ['admin', 'superAdmin'],
       'rememberEdit' => ['admin', 'superAdmin'],
       'rememberUpdate' => ['admin', 'superAdmin'],
       'rememberDelete' => ['admin', 'superAdmin'],
       'rememberDeleteBdd' => ['admin', 'superAdmin'],
       'rememberAddPage' => ['admin', 'superAdmin'],
       'rememberAddBdd' => ['admin', 'superAdmin'],
       'tribe' => ['admin', 'superAdmin'],
       'tribeEdit' => ['admin', 'superAdmin'],
       'tribeEditUpdate' => ['admin', 'superAdmin'],
       'tribeDelete' => ['admin', 'superAdmin'],
       'tribeDeleteBdd' => ['admin', 'superAdmin'],
       'tribeAddPage' => ['admin', 'superAdmin'],
       'tribeAddBdd' => ['admin', 'superAdmin'],
       'user' => ['superAdmin'],
       'userEditPage' => ['superAdmin'],
       'userUpdate' => ['superAdmin'],
       'userDeletePage' => ['superAdmin'],
       'userDeleteBdd' => ['superAdmin'],
       'userAdd' => ['superAdmin'],
       'userAddToBdd' => ['superAdmin'],

    ];

    if(!empty($routeName) && isset($acl[$routeName])){

        $authorizedRoles = $acl[$routeName] ;

        $this->checkAuthorization($authorizedRoles);
    }     
   } 

    protected function show($viewName , $param =[])
    {
        global $router;

        $param['currentPage'] = $viewName;

        $param['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        $param['baseUri'] = $_SERVER['BASE_URI'];

        extract($param);

        require __DIR__ . '../../../views/header.tpl.php';
        require __DIR__ . '../../../views/' . $viewName . '.tpl.php';
        require __DIR__ . '../../../views/footer.tpl.php';
    }

    protected function redirect($routeName)
    {
        global $router;

        header('Location: '.$router->generate($routeName));
        exit;
    }

    public function checkAuthorization(array $role = [] )
   {

        if(!isset($_SESSION['user'])){

            global $router;

            $_SESSION['response']   = 'Vous devez être connecté pour voir cette page';

            $router->generate('home');

        } else {
            $userConnected = $_SESSION['user'] ;

            $userRole = $userConnected->getRole();


            if(!empty($role) && !in_array($userRole, $role)){

                $errorController = new ErrorController();

                $errorController->err404();
            } 
        } 
   } 

}