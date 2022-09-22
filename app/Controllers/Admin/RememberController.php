<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Remember;

class RememberController extends CoreController
{
    public function rememberEditPage($id)
   {
    $rememberId = $id['id'];

    $remember = new Remember;

    $currentRemember = $remember->find($rememberId);

    $param =['remember' => $currentRemember] ;

    $this->show('rememberEdit', $param );
    
   } 
}

