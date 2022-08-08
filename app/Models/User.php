<?php

namespace FamilyTrip\Models;

use PDO;
use FamilyTrip\Utils\Database;
use FamilyTrip\Models\CoreModel;

class User extends CoreModel
{
    // ===============
    // Propriétés
    // =============
    private $firstname;
    private $lastname;
    private $email;
    private $password; 

    // ==================
    // Méthodes
    // ==================
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = " SELECT * FROM `USER`";

        $statement = $pdo->query( $sql );

        $userList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $userList;
    }

    // ===================
    // Getters et Setters
    // ===================

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}