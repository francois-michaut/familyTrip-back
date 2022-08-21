<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\User;

class UserController
{
    
    public function getUsers()
    {
        $user = new User();

        $userList = $user->findall();

        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($userList, JSON_UNESCAPED_UNICODE);
    }

    
}