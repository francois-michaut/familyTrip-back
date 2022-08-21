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

        $sql = "SELECT * FROM `TRIBE`";

        $statement = $pdo->query( $sql );

        $tribeList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $tribeList;
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