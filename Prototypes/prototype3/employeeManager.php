<?php

require_once 'employee.php';
class employeeManager {
    private $connection = null;

    // check connection

    private function getConnection (){
       if (is_null($this->connection)) {
           $this->connection = mysqli_connect('localhost','admin','admin','employee_db');
           if (!$this->connection) {
               $message = 'connection failed'. mysqli_connect_error();
               throw new Exception($message);
           }
       }
       return $this->connection; 
    }
    
    public function getAllEmployee(){
        // get data from data base
        $getdata = 'SELECT * FROM employeeinfo';

    }
}

?>