<?php
session_start();
require('includes/con_wed.php');
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
$access = $row['UserStatus'];

if($count != 1){
    header("Location: login.php");
    
}

if($access != 3){
    header("Location: client.php");
    
}


$sql = "SELECT * FROM wednesday WHERE ";
$myData = mysql_query($sql) or die(mysql_error());
$rows = mysql_fetch_assoc($sql); 




?>