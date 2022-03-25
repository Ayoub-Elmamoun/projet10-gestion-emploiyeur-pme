<?php

require_once 'employee.php';
class employeeManager {
    private $connection = null;

    // check connection

    private function getConnection (){
       if (is_null($this->connection)) {
           // connect to database
           $this->connection = mysqli_connect('localhost','admin','admin','employee_db');
           if (!$this->connection) {
               $message = 'connection failed'. mysqli_connect_error();
               throw new Exception($message);
           }
       }
       return $this->connection; 
    }
    
    public function getAllEmployee(){
        // select data from data base
        $getdata = 'SELECT * FROM employeeinfo';
        //make query and get result
        $result = mysqli_query($this->getConnection(),$getdata);
        //get data as array
        $employeeList = mysqli_fetch_assoc($result);
        print_r($employeeList);
        $employees = array();

        foreach ($employeeList as $employeeList) {
            $employee = new Employee();
            $employee->setId($employeeList["id"]);
            $employee->setFirstName($employeeList["firstname"]);
            $employee->setLastName($employeeList["lastname"]);
            $employee->setGender($employeeList["gender"]);
            $employee->setBirthDate($employeeList["birthdate"]);
            array_push($employees,$employee);
        }
        return $employees;
    }


}

?>