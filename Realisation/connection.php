<?php 

class MysqlConnection {
    private $host;
    private $username;
    private $password;
    private $databaseName;

    protected function getConnection(){
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->databaseName = "employees_db";

        $connection = new mysqli($this->host , $this->username , $this-> password , $this->databaseName);
        return $connection;
    }
}






?>