<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Tribe;

class TribeController extends CoreController
{
    public function tribeEdit($id)
   {
    /* $currentId = $id['id'] ; */

    $tribe = new Tribe;

    $currentTribe = $tribe->find($id);

    $param =['tribe' => $currentTribe] ;

    $this->show('tribeEdit', $param);
   } 

   public function tribeUpdate($id)
  {
    /* $currentId = $id['id'] ; */

    $tribeName = filter_input(INPUT_POST, 'name');
    $tribeId = filter_input(INPUT_POST, 'id');

    $tribe = new Tribe;

    $currentTribe = $tribe->find($id);

    $currentTribe->setName($tribeName);

    $currentTribe->update();

    $this->redirect('tribe');
  } 

  public function tribeDelete($id)
 {
    

    $tribe = new Tribe;

    $currentTribe = $tribe->find($id);

    $param =['tribe' => $currentTribe] ;

    $this->show('tribeDelete', $param);
 } 

 public function tribeDeleteInBdd($id)
{
       $tribe = new Tribe;

    $currentTribe = $tribe->delete($id);

    $this->redirect('tribe');
} 

public function tribeAddPage() 
{
    $this->show('tribeAddPage');
}

public function tribeAddBdd() 
{
    $tribeName = filter_input(INPUT_POST, 'name');

    $tribe = new Tribe;

    $tribe->addTribe($tribeName);

    $this->redirect('tribe');
}


} 
