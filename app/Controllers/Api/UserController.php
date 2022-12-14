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

    $pseudo = $user['userPseudo'];
    $name = $user['userName'];
    $firstname = $user['userFirstname'];
    $email = $user['userMail'];
    $password = $user['userPassword'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $user = new User();
    
    $user->addUser($name, $firstname,$email, $hashPassword, $pseudo);

    return $user;

   } 

    
}