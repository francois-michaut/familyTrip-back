<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Activity;

class ActivityController
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

    public function activityEdit($id) 
    {
        $activityId = $id['id'];

       $activity = new Activity;

       $activityObject = $activity->find($activityId);


       $param =  ['activity' => $activityObject ];

       

        $this->show('activityEdit', $param);

    }
}

