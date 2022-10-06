<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\ShoppingList;

class ShoppingListController extends CoreController
{
    public function shoppinglistEdit($id)
    {
        $currentShoppinglist = new Shoppinglist;

        $shoppinglistObject = $currentShoppinglist->find($id);

        $param = ['shoppingList' => $shoppinglistObject];

        $this->show('shoppinglistEdit', $param);
    }

    public function shoppinglistUpdate($id)
    {
        $shoppingListDetail = filter_input(INPUT_POST, 'shoppingListContent');
        $shoppingListId = intval(filter_input(INPUT_POST, 'shoppingListTribeName'));

        $newShoppingList = new ShoppingList;

        $newShoppingList = $newShoppingList->find($id);

        $newShoppingList->setList($shoppingListDetail);
        $newShoppingList->setTribeId($shoppingListId);

        $newShoppingList->update();

        $this->redirect('shoppinglist');
    }

    public function shoppinglistDeletePage($id)
    {
        $currentShoppingList = new ShoppingList;

        $currentShoppingList = $currentShoppingList->find($id);

        $param = ['shoppingList' => $currentShoppingList];

        $this->show('shoppingListDelete', $param );
    }

    public function shoppinglistDelete($id)
    {
        $shoppingList = new ShoppingList;

        $shoppingList->delete($id);

        $this->redirect('shoppinglist');
    }

    public function shoppinglistAddPage()
   {
    $this->show('shoppingListAddPage');
   } 

   public function shoppinglistAddPageToBdd()
  {
    $shoppingListList = filter_input(INPUT_POST, 'list');
    $shoppingListTribeId = filter_input(INPUT_POST, 'id');

    $newShoppingList = new ShoppingList;

    $newShoppingList->addShoppingList($shoppingListList);

    $this->redirect('shoppinglist');
  } 
}