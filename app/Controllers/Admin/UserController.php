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

   public function userUpdate($id)
  {
    $currentId = $id['id'] ;

    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');

    $user = new User;

    $currentUser = $user->find($currentId);

    $currentUser->setFirstname($firstname);
    $currentUser->setLastname($lastname);
    $currentUser->setEmail($email);

    $currentUser->update();

    $this->redirect('user');
  } 

  public function userDeletePage($id)
 {
    $currentId = $id['id'] ;

    $user = new User;

    $currentUser = $user->find($currentId);

    $param = ['user' => $currentUser] ;

    $this->show('userDelete', $param);
 } 

 public function userDeleteBdd($id)
{
    $currentId = $id['id'] ;

    $currentUser = new User;

    $currentUser->delete($currentId);

    $this->redirect('user');
} 

public function userAdd()
{
    $this->show('userAdd');
} 

public function userAddToBdd() 
{
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');

    $newUser = new User;

    $newUser->add($firstname, $lastname, $email);

    $this->redirect('user');
} 

public function login()
{
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    $user = new User;

    $currentUser = $user->findUserByMail($email);

    if($currentUser !== false){
        $currentPassword = $currentUser->getPassword();

        if( password_verify($password, $currentPassword) === true ){
            $_SESSION['user']  = $currentUser;
            $_SESSION['response']  = 'ok';

            $this->redirect('activity');
        } 
        else{
            $this->show('err404');
        } 
    } else{
        $this->show('err404');
    } 
} 



} 

