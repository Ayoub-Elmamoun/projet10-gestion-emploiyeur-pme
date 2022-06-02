
<?php

include "employeeManager.php";
$employeeManager = new EmployeeManager();

if(isset($_GET['id'])){
    $employe = $employeeManager->getEmployee($_GET['id']);
}

if(isset($_POST['Update'])){
    $id = $_POST['id'];
    $registrationNumber=$_POST['registNumber'];
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $birthDate=$_POST['birth_date'];
    $functionEmployee=$_POST['functionEmployee'];
    $salary=$_POST['salary'];
    $departement=$_POST['departement'];
    $photo=$_POST['photo'];


    
    $employeeManager->editEmployee($id,
                                $registrationNumber,
                                $firstName,
                                $lastName,
                                $birthDate,
                                $functionEmployee,
                                $salary,
                                $departement,
                                $photo);
    header('Location: index.php');
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

<body>


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
              <a class="nav-link" href="insert.php">Add Employee</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">Search Employee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main.php">Browse Employees</a>
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
                <input type="text" required name="registNumber" value="<?php echo $employe->getRegistrationNumber()?>" class="form-control" id="inputTitle" placeholder="Registration Number">
              </div>
              <div class="col-md-6">
                <label for="inputAuthor" class="form-label"></label>
                <input type="text" required name="first_name"  value="<?php echo $employe->getFirstName()?>" class="form-control" id="inputAuthor" placeholder="First Name">
              </div>
              <div class="col-md-6"">
                                    <label for=" inputPrix" class="form-label"></label>
                <input type="text" required name="last_Name" value="<?php echo $employe->getLastName()?>" class="form-control" id="inputPrix" placeholder="Last Name">
              </div>
              <div class="col-6">
                <label for="inputDate" class="form-label"></label>
                <input type="date" required name="birthdate" value="<?php echo $employe->getBirthDate()?>"  class="form-control" id="inputDate" placeholder="Birth date ">
              </div>
              <div class="col-6">
                <label for="department" class="form-label"></label>
                <input type="text" required name="departement" value="<?php echo $employe->getDepartement()?>" class="form-control" placeholder="Department">
              </div>
              <div class="col-md-6">
                <label for="salary" class="form-label"></label>
                <input type="number" required name="salary" value="<?php echo $employe->getSalary()?>" class="form-control" placeholder="Salary">
              </div>
              <div class="col-6">
                <label for="occupation" class="form-label"></label>
                <input type="text" required name="functionEmployee" class="form-control" placeholder="Occupation">
              </div>
              <div class="col-6">
                <label for="photo" class="form-label"></label>
                <input type="file" required name="uploadedFile" value="<?php echo $employe->getPhoto()?>" class="form-control" value="" placeholder="Photo">
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
