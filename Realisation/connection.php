<?php 

 class MysqlConnection{
    private $Connection = null;
    public function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'root', '', 'employees_db');

            if (!$this->Connection) {
                $message = 'Connection Error: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

 }



?>