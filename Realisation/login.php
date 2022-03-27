<?php


if (isset($_POST['username'], $_POST['password'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'admin' && $password == 'admin') {

    header('location:index.php');
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <h2 class="inactive underlineHover">Sign Up </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="/user.svg" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form method="POST">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
</body>

</html>