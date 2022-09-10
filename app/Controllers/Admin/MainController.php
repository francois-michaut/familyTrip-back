<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\User;
use FamilyTrip\Models\Activity;
use FamilyTrip\Models\Tribe;
use FamilyTrip\Models\Remember;
use FamilyTrip\Models\ShoppingList;

class MainController
{
    
    public function show($viewName , $param =[])
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

    public function home()
    {
        $this->show( 'home');
    }
    public function activity()
    {
        $activities = new Activity();

        $activitiesList = $activities->findAll();

        $param['activitiesList'] = $activitiesList;

        $this->show( 'activity', $param );
    }
    // public function activityEdit($id)
    // {
    //     $activity = new Activity();

    //     $activityDetail = $activity->find($id);
        
    //     $param['activityDetail'] = $activityDetail;

    //     $this->show('activityEdit', $param);
    // }
    
    public function shoppinglist()
    {

        $shoppingList = new ShoppingList();

        $shoppingListsList = $shoppingList->findAll();

        $param['shoppingListsList'] = $shoppingListsList;

        $this->show( 'shoppinglist', $param );
    }
    public function remember()
    {
        $remember = new Remember();

        $remembersList = $remember->findAll();

        $param['remembersList'] = $remembersList;

        $this->show( 'remember', $param );
    }
    public function tribe()
    {
        $tribes = new Tribe();

        $tribesList = $tribes->getFiveTribes();

        $param['tribesList'] = $tribesList;

        $this->show( 'tribe', $param );
    }


    public function user()
    {
        $user = new User();

        $userList = $user->findAll();

        $param['userList'] = $userList;

        $this->show( 'user', $param);
    }

    public function err404()
    {
        $this->show( 'err404' );
    }

}