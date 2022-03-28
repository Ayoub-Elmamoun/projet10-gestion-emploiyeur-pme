<?php
class connection
{
    private $connection = null;
    private function getConnect()
    {
        if (is_null($this->connection)) {
            $this->connection = mysqli_connect("localhost", "test1", "test1", "employees_db");

            if (!$this->connection) {
                $message = "connection failed" . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->connection;
    }
}
