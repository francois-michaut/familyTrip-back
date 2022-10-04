<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Remember;

class RememberController extends CoreController
{
    public function rememberEditPage($id)
   {
    $remember = new Remember;

    $currentRemember = $remember->find($id);

    $param =['remember' => $currentRemember] ;

    $this->show('rememberEdit', $param );

   } 

   public function rememberUpdate($id)
  {
    $rememberName = filter_input(INPUT_POST, 'name');
    $rememberLocation = filter_input(INPUT_POST, 'location');
    $rememberDate = filter_input(INPUT_POST, 'date');
    $rememberMembers = filter_input(INPUT_POST, 'members');

    $remember = new Remember;

    $currentRemember = $remember->find($id);

    $currentRemember->setName($rememberName);
    $currentRemember->setLocation($rememberLocation);
    $currentRemember->setDate($rememberDate);
    $currentRemember->setMembers($rememberMembers);

    $currentRemember->update();

    $this->redirect('remember');
  } 

  public function rememberDeletePage($id)
 {
    $remember = new Remember;

    $currentRemember = $remember->find($id);

    $param['remember'] = $currentRemember;

    $this->show('rememberDelete', $param );
 } 

 public function rememberDelete($id)
{
  $remember = new Remember;

  $currentRemember = $remember->delete($id);

  $this->redirect('remember');
} 

public function rememberAddPage()
{
  $this->show('rememberAdd');
}

public function rememberAddBdd() 
{
  $rememberName = filter_input(INPUT_POST, 'name');
  $rememberLocation = filter_input(INPUT_POST, 'location');
  $rememberDate = filter_input(INPUT_POST, 'date');
  $rememberMembers = filter_input(INPUT_POST, 'members');

  $newRemember = new Remember;

  $newRemember->addRemember($rememberLocation, $rememberDate, $rememberMembers, $rememberName);

  $this->redirect('remember');
}



}

