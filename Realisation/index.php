<?php


if (isset($_POST['username'], $_POST['password'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'admin' && $password == 'admin') {

    header('location:main.php');
  }
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

  <link rel="stylesheet" href="../Realisation/style/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../Realisation/style/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../Realisation/style/css/style.css">

  <title>Website Menu #8</title>
</head>

<body class="hero" style="background-image: url('/Realisation/style/images/nature-background.jpg');">


  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">PME</a>
      </div>
    </nav>
  </header>
  <!-- END header -->
  <div class="container" style="padding-top: 50px;">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <!-- <label for="floatingPassword">Password</label> -->
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label " for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid ">
                <button class="col-lg-5  btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign Sin</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="hero" style="background-image: url('images/nature-background.jpg');"></div> -->



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
</body>

</html>