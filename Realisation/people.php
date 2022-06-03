<?php 

class People{
    private $id;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $photo;

    // Getters and setters for id
    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = $value;
    }

    // Getters and setters for firstName
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($value)
    {
        $this->firstName = $value;
    }
    

    // Getters and setters for lastName
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    // Getters and setters for birthDate
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($value)
    {
        $this->birthDate = $value;
    }

    // Getters and setters for photo
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($value)
    {
        $this->photo = $value;
    }
}

?>