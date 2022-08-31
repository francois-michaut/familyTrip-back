<?php

namespace FamilyTrip\Models;

use PDO;
use FamilyTrip\Utils\Database;
use FamilyTrip\Models\CoreModel;

class Remember extends CoreModel
{
    // ==========
    // Propriétés
    // ==========
    private $name;
    private $location;
    private $date;
    private $members;

    // ===============
    // Méthodes
    // ===============
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `REMEMBER`";

        $statement = $pdo->query( $sql );

        $remembersList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $remembersList;
    }

    public function addRemember($location, $date, $members, $name)
    {
        $pdo = Database::getPDO();

        $sql = "INSERT INTO `REMEMBER` (location, date, members, name) VALUES (:location, :date, :members, :name)";

        $statement = $pdo->prepare($sql);

        $statement->bindParam(':location', $location);
        $statement->bindParam(':date', $date);
        $statement->bindParam(':members', $members);
        $statement->bindParam(':name', $name);

        $statement->execute();
    }
    //===================
    // Getters et Setters
    // ==================
    

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

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of members
     */ 
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set the value of members
     *
     * @return  self
     */ 
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }
}