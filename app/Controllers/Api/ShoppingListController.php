<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\ShoppingList;

class ShoppingListController
{
    public function shoppingListPost()
    {
        $data = file_get_contents('php://input');

        $shoppingList = json_decode($data, true);

        $list = $shoppingList['list']['ingredientArray'];

        $list = implode(",", $list);

        $shoppingList = new ShoppingList();

        $shoppingList->addShoppingList($list);
    }
}