<?php
include "people.php";
class Employee extends People
{

    private $registrationNumber;
    private $salary;
    private $departement;

    // Getters and setters for registrationNumber
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber($value)
    {
        $this->registrationNumber = $value;
    }

    // Getters and setters for salary
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($value)
    {
        $this->salary = $value;
    }

    // Getters and setters for departement
    public function getDepartement()
    {
        return $this->departement;
    }

    public function setDepartement($value)
    {
        $this->departement = $value;
    }
}
