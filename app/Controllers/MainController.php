<?php

namespace FamilyTrip\Controllers;

class MainController
{

    public function show($viewName , $param =[])
    {
        require __DIR__ . '../../views/header.tpl.php';
        require __DIR__ . '../../views/' . $viewName . '.tpl.php';
        require __DIR__ . '../../views/footer.tpl.php';
    }

    public function home()
    {
        $this->show( 'home');
    }
    public function activity()
    {
        $this->show( 'activity');
    }

    public function err404()
    {
        $this->show( 'err404' );
    }

}