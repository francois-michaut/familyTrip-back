<?php

namespace FamilyTrip\Models;

use PDO;
use FamilyTrip\Utils\Database;
use FamilyTrip\Models\CoreModel;

class Tribe extends CoreModel
{
    // =============
    // Propriétés
    // =============
    private $name;

    // ===============
    // Méthodes
    // ===============
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `TRIBE` ORDER BY `name` ";

        $statement = $pdo->query( $sql );

        $tribeList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $tribeList;
    }
    public function getFiveTribes()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `TRIBE` 
                LIMIT 5
        ";

        $statement = $pdo->query( $sql );

        $tribeList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $tribeList;
    }

    public function find($id)
   {
    $pdo = Database::getPDO();

    $sql = "SELECT * FROM `TRIBE` WHERE `id` = $id ";

    $pdoStatement = $pdo->query($sql);

    $tribeDetail = $pdoStatement->fetchObject(Tribe::class);

    return $tribeDetail;

   } 

    public function addTribe($tribeName)
    {
        $pdo = Database::getPDO();

        $sql = "INSERT INTO `TRIBE` (name) VALUES (:name)";

        $statement = $pdo->prepare( $sql );

        $statement->bindParam(':name', $tribeName);

        $statement->execute();

        $response = 'la tribu a bien été ajoutée!';

        return $response;
    }

    public function update()
   {
        $pdo = Database::getPDO();

        $sql = "UPDATE `TRIBE`
                SET
                    name = :name
                    WHERE id = :id
                ";
        
        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_STR);

        return $pdoStatement->execute();
   }
   
   public function delete($id)
  {
    $pdo = Database::getPDO();

    $sql = "DELETE  FROM `TRIBE` WHERE `id` = $id ";

    $pdoStatement = $pdo->prepare($sql);
    
    return $pdoStatement->execute();

  } 
    
    // ==================
    // Getters et Setters
    // ===================
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}