<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\ShoppingList;

class ShoppingListController extends CoreController
{
    public function shoppinglistEdit($id)
    {
        $newShoppinglistId = $id['id'];

        $currentShoppinglist = new Shoppinglist;

        $shoppinglistObject = $currentShoppinglist->find($newShoppinglistId);

        $param = ['shoppingList' => $shoppinglistObject];

        $this->show('shoppinglistEdit', $param);
    }

    public function shoppinglistUpdate($id)
    {
        $currentId = $id['id'];

        $shoppingListDetail = filter_input(INPUT_POST, 'shoppingListContent');
        $shoppingListId = intval(filter_input(INPUT_POST, 'shoppingListTribeName'));

        $newShoppingList = new ShoppingList;

        $newShoppingList = $newShoppingList->find($currentId);

        $newShoppingList->setList($shoppingListDetail);
        $newShoppingList->setTribeId($shoppingListId);

        $newShoppingList->update();

        $this->redirect('shoppinglist');
    }

    public function shoppinglistDeletePage($id)
    {
        $currentId = $id['id'];

        $currentShoppingList = new ShoppingList;

        $currentShoppingList = $currentShoppingList->find($currentId);

        $param = ['shoppingList' => $currentShoppingList];

        $this->show('shoppingListDelete', $param );
    }

    public function shoppinglistDelete($id)
    {
        $currentId = $id['id'];

        $shoppingList = new ShoppingList;

        $shoppingList->delete($currentId);

        $this->redirect('shoppinglist');
    }

    public function shoppinglistAddPage()
   {
    $this->show('shoppingListAddPage');
   } 
}