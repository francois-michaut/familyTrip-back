<?php

namespace FamilyTrip\Controllers\Admin;

abstract class CoreController
{
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
}