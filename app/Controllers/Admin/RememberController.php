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

   public function rememberUpdate($id)
  {
    $currentId = $id['id'] ;

    $rememberName = filter_input(INPUT_POST, 'name');
    $rememberLocation = filter_input(INPUT_POST, 'location');
    $rememberDate = filter_input(INPUT_POST, 'date');
    $rememberMembers = filter_input(INPUT_POST, 'members');

    $remember = new Remember;

    $currentRemember = $remember->find($currentId);

    $currentRemember->setName($rememberName);
    $currentRemember->setLocation($rememberLocation);
    $currentRemember->setDate($rememberDate);
    $currentRemember->setMembers($rememberMembers);

    $currentRemember->update();

    $this->redirect('remember');
  } 

  public function rememberDeletePage($id)
 {
    $currentId = $id['id'];

    $remember = new Remember;

    $currentRemember = $remember->find($currentId);

    $param['remember'] = $currentRemember;

    $this->show('rememberDelete', $param );
 } 

 public function rememberDelete($id)
{
  $currentId = $id['id'];

  $remember = new Remember;

  $currentRemember = $remember->delete($currentId);

  $this->redirect('remember');
} 
}

