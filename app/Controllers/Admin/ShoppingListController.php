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
}