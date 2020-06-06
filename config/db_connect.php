<?php

//connect to databse
$conn = mysqli_connect('localhost', 'ninja_pizza_db', 'test1234', 'ninja_pizza');

//check connection
if(!$conn) {
  echo 'Connection error: '.mysqli_connect_error();
}

 ?>
