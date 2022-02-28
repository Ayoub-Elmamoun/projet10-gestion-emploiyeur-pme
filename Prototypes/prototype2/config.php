<?php
   $conn = mysqli_connect('localhost', 'ayoub', 'ayoub!123', 'demo');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>