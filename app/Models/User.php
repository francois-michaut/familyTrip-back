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
    private $tribe_id;
    private $role;

    // ==================
    // Méthodes
    // ==================

    public function find($id)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `USER` WHERE `id` = $id ";

        $pdoStatement = $pdo->query($sql);

        $user = $pdoStatement->fetchObject(User::class);

        return $user;
    } 


    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = " SELECT * FROM `USER`";

        $statement = $pdo->query( $sql );

        $userList = $statement->fetchAll( PDO::FETCH_ASSOC );

        // $userList = json_encode($userList);
        // dump($userList);
        return $userList;
    }

    public function findMembersByTribeId( $tribeId )
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `USER` WHERE `USER`.tribe_id = $tribeId ";

        $statement = $pdo->query( $sql );

        $membersList = $statement->fetchAll( PDO::FETCH_ASSOC );

        return $membersList;
    }

    public function addUser($userName, $userEmail, $userPassword)
   {
    $pdo = Database::getPdo();

    $sql = "INSERT INTO `USER` (pseudo, email, password) VALUES (:pseudo, :email, :password)";

    $statement = $pdo->prepare($sql);


    $statement->bindParam(':pseudo', $userName);
    $statement->bindParam(':email', $userEmail);
    $statement->bindParam(':password', $userPassword);

    $statement->execute();
   } 

   public function update()
  {
        $pdo = Database::getPDO();

        $sql = "UPDATE `USER`
                SET 
                    firstname = :firstname,
                    lastname = :lastname,
                    email = :email
                WHERE id = :id
            ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatement->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $this->email, PDO::PARAM_STR);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_STR);

        return $pdoStatement->execute();
  } 

  public function delete($id)
 {
    $pdo = Database::getPDO();

    $sql = "DELETE FROM `USER` WHERE id = $id ";

    $pdoStatement = $pdo->prepare($sql);

    return $pdoStatement->execute();
 } 

 public function add($firstname, $lastname, $email)
{
    $pdo = Database::getPDO();

    $sql = "INSERT INTO `USER` (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";

    $pdoStatement = $pdo->prepare($sql);

    $pdoStatement->bindParam(':firstname', $firstname);
    $pdoStatement->bindParam(':lastname', $lastname);
    $pdoStatement->bindParam(':email', $email);

    $pdoStatement->execute();
} 

public function findUserByMail($mail)
{
    $pdo = Database::getPDO();

    $sql = "SELECT * FROM `USER` WHERE  `email`  = :mail";

    $pdoStatement = $pdo->prepare($sql);

    $pdoStatement->bindValue(':mail', $mail);

    $pdoStatement->execute();

    $user = $pdoStatement->fetchObject(USER::class);

    return $user;
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

    /**
     * Get the value of tribe_id
     */ 
    public function getTribe_id()
    {
        return $this->tribe_id;
    }

    /**
     * Set the value of tribe_id
     *
     * @return  self
     */ 
    public function setTribe_id($tribe_id)
    {
        $this->tribe_id = $tribe_id;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}