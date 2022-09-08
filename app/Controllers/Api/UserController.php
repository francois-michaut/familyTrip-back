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

    public function userPost()
   {
    $data = file_get_contents('php://input');

    $user = json_decode($data, true);

    $pseudo = $user['pseudo'];
    $email = $user['email'];
    $password = $user['password'];

    $user = new User();
    
    $user->addUser($pseudo, $email, $password);

    return $user;

   } 

    
}