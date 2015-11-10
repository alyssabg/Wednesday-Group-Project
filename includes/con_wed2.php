<?php

//create connection to database - Local
//$con=mysqli_connect("localhost","root","root","lo071617");

//create connection to database - Sulley
$con=mysqli_connect('sulley.cah.ucf.edu', 'ka578143', 'DancinG#93', 'ka578143');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>