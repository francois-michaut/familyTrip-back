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

        $sql = "SELECT * FROM `TRIBE` ORDER BY `name` LIMIT 5";

        $statement = $pdo->query( $sql );

        $tribeList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $tribeList;
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