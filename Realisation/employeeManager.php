<?php

require_once "employee.php";

class employeeManager
{
    private $Connection = null;

    private function getConnection()
    {
        if (is_null($this->Connection)) {

            $this->Connection = mysqli_connect("localhost", "admin", "admin", "employee_db");

            if (!$this->Connection) {
                $message = "connaction error" . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }
    public function uploadPhoto($fileName, $tempName)
    {

        $folder = 'images/' . $fileName;
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($tempName, $folder);
    }
};
