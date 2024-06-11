<?php

$connection = mysqli_connect('localhost', 'root', '', 'riet');

// Check connection
if ($connection) {
   // echo "we are connected";
}
else{
    die("Database connection failed: " . mysqli_connect_error($connection));
}

?>

  <?php
  // $mysqli = new mysqli("localhost","","","forget");

  // // Check connection
  // if ($mysqli -> connect_errno) {
  //   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  //   exit();
  // }
  ?>