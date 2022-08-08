<?php

namespace FamilyTrip\Controllers;

use FamilyTrip\Models\User;

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
    public function shoppinglist()
    {
        $this->show( 'shoppinglist' );
    }
    public function remember()
    {
        $this->show( 'remember' );
    }
    public function tribe()
    {
        $this->show( 'tribe' );
    }

    public function user()
    {
        $user = new User();

        $userList = $user->findAll();

        $this->show( 'user', $userList);
    }

    public function err404()
    {
        $this->show( 'err404' );
    }

}