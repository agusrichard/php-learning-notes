<?php 

  // Connect to database
  $conn = mysqli_connect('localhost', 'root', '', 'ninja_pizza');

  // Check the connection
  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>