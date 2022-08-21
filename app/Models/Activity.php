<?php

namespace FamilyTrip\Models;

use PDO;
use FamilyTrip\Utils\Database;
use FamilyTrip\Models\CoreModel;

class Activity extends CoreModel
{
    // ============
    // Propriétés
    // ============
    private $location;
    private $date;
    private $nb_members;
    private $type;
    private $description;
    private $hourly;

    // ===============
    // Méthodes
    // ===============
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `ACTIVITY`";

        $statement = $pdo->query( $sql );

        $activitiesList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $activitiesList;
    }

    public function findActivitiesByTribe($tribeId)
    {
        $pdo = Database::getPDO();

        $sql = "";
    }

    // ===============
    // Getters et setters
    // =================
    

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
     * Get the value of nb_members
     */ 
    public function getNb_members()
    {
        return $this->nb_members;
    }

    /**
     * Set the value of nb_members
     *
     * @return  self
     */ 
    public function setNb_members($nb_members)
    {
        $this->nb_members = $nb_members;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of hourly
     */ 
    public function getHourly()
    {
        return $this->hourly;
    }

    /**
     * Set the value of hourly
     *
     * @return  self
     */ 
    public function setHourly($hourly)
    {
        $this->hourly = $hourly;

        return $this;
    }
}