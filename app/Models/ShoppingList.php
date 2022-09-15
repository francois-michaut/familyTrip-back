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
    private $tribeId;

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

    public function addShoppingList($list)
    {
        $pdo = Database::getPDO();

        $sql = "INSERT INTO `SHOPPINGLIST` (list) VALUES (:list)";

        $statement = $pdo->prepare($sql);

        $statement->bindParam(':list', $list);

        $statement->execute();
    }

    public function find($id)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `SHOPPINGLIST` WHERE `id` = " . $id;

        $statement = $pdo->query($sql);

        $shoppinglistDetail = $statement->fetchObject(Shoppinglist::class);

        return $shoppinglistDetail;
    }

    public function update()
    {
        $pdo = Database::getPDO();

        $sql = "UPDATE `SHOPPINGLIST`
                SET
                   list = :list,
                   tribeId = :tribeId
                WHERE id = :id 
                ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatement->bindValue(':list', $this->list, PDO::PARAM_STR);
        $pdoStatement->bindValue(':tribeId', $this->tribeId, PDO::PARAM_STR);

        return $pdoStatement->execute();
    }

    public function delete($id)
    {
        $pdo = Database::getPDO();

        $sql = "DELETE FROM `SHOPPINGLIST` WHERE `id` = $id";

        $pdoStatement = $pdo->prepare($sql);

        return $pdoStatement->execute();
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
    

    /**
     * Get the value of tribeId
     */ 
    public function getTribeId()
    {
        return $this->tribeId;
    }

    /**
     * Set the value of tribeId
     *
     * @return  self
     */ 
    public function setTribeId($tribeId)
    {
        $this->tribeId = $tribeId;

        return $this;
    }
}