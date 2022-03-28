<?php


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
              <a class="nav-link" href="insert.php">Add Employee</a>
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

  <div class="container" style="padding-top:90px;">

    <div class="row align-content-center  justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-header text-center">
            <div>ADD EMPOLYEE</div>
          </div>

          <div class="card-body" id="card-body">
            <table class="table">
              <thead id="table-head">
                <tr>
                  <th>Photo</th>
                  <th>Registration Number </th>
                  <th class="d-none d-lg-table-cell">First Name</th>
                  <th class="d-none d-lg-table-cell">Last Name</th>
                  <th class="d-none d-lg-table-cell">Birth Date</th>
                  <th class="d-none d-lg-table-cell">Department</th>
                  <th>Salary</th>
                  <th>Occupation</th>
                  <th id="actions">Action</th>
                </tr>
              </thead>
              <?php
              foreach ($data as $employee) {
              ?>
                <tr>
                  <td><img class="border rounded-circle" style="max-width:50px;" src="<?php echo 'images/' . $employee->getPhoto(); ?>"></td>
                  <td>
                    <?= $employee->getRegistrationNumber() ?>
                  </td>
                  <td>
                    <?= $employee->getFirstName() ?>
                  </td>
                  <td>
                    <?= $employee->getLastName() ?>
                  </td>
                  <td>
                    <?= $employee->getBirthDate() ?>
                  </td>
                  <td>
                    <?= $employee->getDepartment() ?>
                  </td>
                  <td>
                    <?= $employee->getSalary() ?>
                  </td>
                  <td>
                    <?= $employee->getOccupation() ?>
                  </td>
                  <td>
                    <a href="edit.php?id=<?php echo $employee->getId() ?>" class="text-primary" style="text-decoration: none;"><i class="fa fa-fw fa-edit"></i>Edit</a> |
                    <a href="delete.php?id=<?php echo $employee->getId() ?>" class="text-danger" style="text-decoration: none;" onClick="return confirm('Are you sure you want to delete this employee ?');"><i class="fa fa-fw fa-trash"></i>Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </table>
            <!-- <button class="btn-custom btn-secondary-custom-1" id="print"  onclick="onPrint()">Print</button> -->
          </div>>

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