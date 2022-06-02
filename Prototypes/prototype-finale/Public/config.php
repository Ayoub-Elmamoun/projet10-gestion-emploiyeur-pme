<?php
$conn = mysqli_connect('localhost', 'admin', 'admin', 'employees_db');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
