<?php 

class Employee {
    private $id;    
    private $firstname;
    private $lastname;
    private $gender;
    private $birthdate;
    
    public function getId(){
        return $this->id;
    }
    public function setId($value){
        return $this->id = $value;
    }
    public function getFirstName() {
        return $this->firstname;
    }
    public function setFirstName($value){
        return $this->firstname = $value;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function setLastName($value){
        return $this->lastname = $value;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setGender($value){
        return $this->gender = $value;
    }
    public function getBirthDate(){
        return $this->birthDate;
    }
    public function setBirthDate($value){
        return $this->birthdate  = $value;
    }

}

?>