<?php
session_start();
require('../includes/con_wed2.php');
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
$access = $row['UserStatus'];


$sql = "SELECT * FROM wednesday";
$myData = mysql_query($sql) or die(mysql_error());
//$rows = mysql_fetch_assoc($sql); 


if($count != 1){
    header("Location: ../login.php");
    
}

if($access != 3){
    header("Location: ../client.php");
    
}

$id = $_GET['id'];

$sql = "DELETE * FROM wednesday WHERE productID = '$id'";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

else{
	header("Location: ../admin.php")
}

exit();
?>