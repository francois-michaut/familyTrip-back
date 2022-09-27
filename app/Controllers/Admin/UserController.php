<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\User;

class UserController extends CoreController
{
    public function userEditPage($id)
   {
        $currentId = $id['id'] ;

        $user = new User;

        $currentUser = $user->find($currentId);

        $param = ['user' => $currentUser] ;

        $this->show('userEdit', $param);
   } 
} 

