<?php
include 'employee.php';

class EmployeeManager
{

    private $Connection = null;

    private function getConnection()
    {
        if (is_null($this->Connection)) {
            $this->Connection = mysqli_connect('localhost', 'test1', 'test1', 'employees_db');

            if (!$this->Connection) {
                $message = 'Connection Error: ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
        return $this->Connection;
    }

    public function getAllEmployees()
    {
        $sqlGetData = 'SELECT id,registNumber, first_name, last_name, birth_date, functionEmployee ,salary,departement,photo  FROM employees ';
        $result = mysqli_query($this->getConnection(), $sqlGetData);
        $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $employees = array();
        foreach ($employeesList as $employee_list) {
            $employee = new Employee();
            $employee->setId($employee_list['id']);
            $employee->setRegistrationNumber($employee_list['registNumber']);
            $employee->setFirstName($employee_list['first_name']);
            $employee->setLastName($employee_list['last_name']);
            $employee->setBirthDate($employee_list['birth_date']);
            $employee->setFunctionEmployee($employee_list['functionEmployee']);
            $employee->setSalary($employee_list['salary']);
            $employee->setDepartement($employee_list['departement']);
            $employee->setPhoto($employee_list['photo']);

            array_push($employees, $employee);
        }

        return $employees;
    }


    public function insertEmployee($employee)
    {
        $registrationNumber = $employee->getRegistrationNumber();
        $firstName = $employee->getFirstName();
        $lastName = $employee->getLastName();
        $birthDate = $employee->getBirthDate();
        $functionEmployee = $employee->getFunctionEmployee();
        $salary = $employee->getSalary();
        $departement = $employee->getDepartement();
        $photo = $employee->getPhoto();



        // sql insert query
        $sqlInsertQuery = "INSERT INTO employees (
                                    registNumber,
                                    first_name, 
                                    last_name, 
                                    birth_date ,
                                    functionEmployee ,
                                    salary,
                                    departement,
                                    photo) 
                            VALUES(
                                    '$registrationNumber', 
                                    '$firstName',
                                    '$lastName',
                                    '$birthDate',
                                    '$functionEmployee',
                                    '$salary',
                                    '$departement',
                                    '$photo'
                                    )";


        mysqli_query($this->getConnection(), $sqlInsertQuery);
    }




    // Edit function.
    public function editEmployee(
        $id,
        $registrationNumber,
        $firstName,
        $lastName,
        $birthDate,
        $functionEmployee,
        $salary,
        $departement,
        $photo
    ) {

        // Update query
        $sqlUpdateQuery = "UPDATE employees SET 
                         registNumber='$registrationNumber',
                         first_name='$firstName', 
                         last_name='$lastName', 
                         birth_date='$birthDate' ,
                         functionEmployee ='$functionEmployee',
                         salary='$salary',
                         departement='$departement',
                         photo='$photo'
                         WHERE id=$id";

        // Make query 
        mysqli_query($this->getConnection(), $sqlUpdateQuery);

        if (mysqli_error($this->getConnection())) {
            $msg = 'Erreur' . mysqli_errno($this->getConnection());
            throw new Exception($msg);
        }
    }

    public function getEmployee($id)
    {
        $sqlGetQuery = "SELECT * FROM employees WHERE id= $id";

        // get result
        $result = mysqli_query($this->getConnection(), $sqlGetQuery);

        // fetch to array
        $employee_data = mysqli_fetch_assoc($result);

        $employee = new Employee();
        $employee->setId($employee_data['id']);
        $employee->setRegistrationNumber($employee_data['registNumber']);
        $employee->setFirstName($employee_data['first_name']);
        $employee->setLastName($employee_data['last_name']);
        $employee->setBirthDate($employee_data['birth_date']);
        $employee->setFunctionEmployee($employee_data['functionEmployee']);
        $employee->setSalary($employee_data['salary']);
        $employee->setDepartement($employee_data['departement']);
        $employee->setPhoto($employee_data['photo']);

        return $employee;
    }

    public function searchByInput($searchInput)
    {
        $searchQuery = "SELECT * FROM employees WHERE registNumber = '$searchInput' OR first_Name = '$searchInput' OR departement = '$searchInput'";
        $result = mysqli_query($this->getConnection(), $searchQuery);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $employeeArray = array();
        foreach ($data as $searchedEmployee) {

            $employee = new Employee();
            $employee->setPhoto($searchedEmployee['photo']);
            $employee->setRegistrationNumber($searchedEmployee['registNumber']);
            $employee->setFirstName($searchedEmployee['first_Name']);
            $employee->setLastName($searchedEmployee['last_Name']);
            $employee->setBirthDate($searchedEmployee['birthDate']);
            $employee->setDepartement($searchedEmployee['departement']);
            $employee->setSalary($searchedEmployee['salary']);
            $employee->setFunctionEmployee($searchedEmployee['functionEmployee']);

            array_push($employeeArray, $employee);
        }
        return $employeeArray;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM employees WHERE id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }
}
