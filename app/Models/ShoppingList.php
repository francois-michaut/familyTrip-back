<?php

namespace FamilyTrip\Models;

use PDO;
use FamilyTrip\Utils\Database;
use FamilyTrip\Models\CoreModel;

class ShoppingList extends CoreModel
{
    //============
    // Propriétés
    // ===========
    private $list;

    // ==============
    // Méthodes
    // ==============
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `SHOPPINGLIST`";

        $statement = $pdo->query( $sql );

        $shoppingListsList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $shoppingListsList;
    }


    // ==================
    // Getters et Setters
    // ==================

    /**
     * Get the value of list
     */ 
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set the value of list
     *
     * @return  self
     */ 
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }
}