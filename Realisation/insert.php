<?php
require_once "employeeManager.php";

if (!empty($_POST)) {
  $employeeManager = new EmployeeManager;
  $fileName = $_FILES["uploadedFile"]["name"];
  $employee = new Employee;
  $employee->setRegistrationNumber($_POST["registrationNumber"]);
  $employee->setFirstName($_POST["firstName"]);
  $employee->setLastName($_POST["lastName"]);
  $employee->setBirthDate($_POST["birthDate"]);
  $employee->setDepartment($_POST["department"]);
  $employee->setSalary($_POST['salary']);
  $employee->setOccupation($_POST['occupation']);
  $employee->setPhoto($fileName);

  $tempName = $_FILES["uploadedFile"]["tmp_name"];
  $employeeManager->insertEmployee($employee);
  $employeeManager->uploadPhoto($fileName, $tempName);
  header("location: main.php");
}

?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Insert Employee</title>
</head>

<body style="background-image: url('images/nature-background.jpg');">


  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">pme</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

            <li class="nav-item">
              <a class="nav-link" href="#">Add Employee</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search Employee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main.php">Browse Employees</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
              <a class="nav-link btn" href="index.php">log out</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <div class="container" style="padding-top:90px;">

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-header text-center">
            <div>ADD EMPOLYEE</div>
          </div>

          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" id="formSubmit" class="row g-3 ">
              <div class="col-md-6">
                <label for="inputTitle" class="form-label"></label>
                <input type="text" required name="registrationNumber" class="form-control" id="inputTitle" placeholder="Registration Number">
              </div>
              <div class="col-md-6">
                <label for="inputAuthor" class="form-label"></label>
                <input type="text" required name="firstName" class="form-control" id="inputAuthor" placeholder="First Name">
              </div>
              <div class="col-md-6"">
                                    <label for=" inputPrix" class="form-label"></label>
                <input type="text" required name="lastName" class="form-control" id="inputPrix" placeholder="Last Name">
              </div>
              <div class="col-6">
                <label for="inputDate" class="form-label"></label>
                <input type="date" required name="birthDate" class="form-control" id="inputDate" placeholder="Birth date ">
              </div>
              <div class="col-6">
                <label for="department" class="form-label"></label>
                <input type="text" required name="department" class="form-control" placeholder="Department">
              </div>
              <div class="col-md-6">
                <label for="salary" class="form-label"></label>
                <input type="number" required name="salary" class="form-control" placeholder="Salary">
              </div>
              <div class="col-6">
                <label for="occupation" class="form-label"></label>
                <input type="text" required name="occupation" class="form-control" placeholder="Occupation">
              </div>
              <div class="col-6">
                <label for="photo" class="form-label"></label>
                <input type="file" required name="uploadedFile" class="form-control" value="" placeholder="Photo">
              </div>

              <div class="container row justify-content-center col-sm-12" style="padding-top: 20px; margin-left: 10px; margin-right:10px;">
                <button id="submitButton" type="submit" class="btn btn-primary ">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>

</html>