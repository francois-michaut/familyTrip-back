<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Tribe;

class TribeController extends CoreController
{
    public function tribeEdit($id)
   {
    $currentId = $id['id'] ;

    $tribe = new Tribe;

    $currentTribe = $tribe->find($currentId);

    $param =['tribe' => $currentTribe] ;

    $this->show('tribeEdit', $param);
   } 
} 
