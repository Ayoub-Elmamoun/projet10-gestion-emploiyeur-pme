<?php
$conn = mysqli_connect('localhost', 'test1', 'test1', 'employees_db');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
