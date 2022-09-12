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
    private $more;

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

    public function addActivity($type, $location, $date, $hourly, $nb_members, $description )
    {
        $pdo = Database::getPDO();

        $sql = "INSERT INTO `ACTIVITY` (type, location, date, hourly, nb_members, more) VALUES (:type, :location, :date, :hourly, :nb_members, :more)";

        $statement = $pdo->prepare($sql);

        $statement->bindParam(':type', $type);
        $statement->bindParam(':location', $location);
        $statement->bindParam(':date', $date);
        $statement->bindParam(':hourly', $hourly);
        $statement->bindParam(':nb_members', $nb_members);
        $statement->bindParam(':more', $description);

        $statement->execute();
    }

    public function find($id)
    {

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `ACTIVITY` WHERE `id`= " . $id ;

        $statement = $pdo->query($sql);

        $activityDetail = $statement->fetchObject(Activity::class);


        return $activityDetail;
    }

    public function update()
    {
        $pdo = Database::getPDO();

        $sql = "UPDATE `ACTIVITY` 
                SET
                   type = :activityType,
                   date = :activityDate,
                   location = :activityLocation,
                   hourly = :activityHourly,
                   more = :activityMore
                WHERE id = :id
                ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatement->bindValue(':activityType', $this->type, PDO::PARAM_STR);
        $pdoStatement->bindValue(':activityDate', $this->date);
        $pdoStatement->bindValue(':activityLocation', $this->location, PDO::PARAM_STR);
        $pdoStatement->bindValue(':activityHourly', $this->hourly, PDO::PARAM_STR);
        $pdoStatement->bindValue(':activityMore', $this->more, PDO::PARAM_STR);

        return $pdoStatement->execute();

    }

    public function delete($id)
    {
        $pdo = Database::getPDO();

        $sql = "DELETE FROM `ACTIVITY` WHERE `id` = $id";

        $pdoStatement = $pdo->prepare($sql);

        return $pdoStatement->execute();
    }
    // =================
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
    /**
     * Get the value of more
     */ 
    public function getMore()
    {
        return $this->more;
    }

    /**
     * Set the value of more
     *
     * @return  self
     */ 
    public function setMore($more)
    {
        $this->more = $more;

        return $this;
    }
}