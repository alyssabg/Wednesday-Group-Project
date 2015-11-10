<?php  //Start the Session
session_start();
require('../includes/con_wed.php');
 
//3.1.1 Assigning posted values to variables.
$email = mysql_real_escape_string($_POST['email']);
$password = sha1(mysql_real_escape_string($_POST['password'])); 

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($email) and isset($password)){
	
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";
 
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

$query2 = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";
$result2 = mysql_query($query2) or die(mysql_error());
$count2 = mysql_num_rows($result2);
$row = mysql_fetch_assoc($result2);

$access = $row['UserStatus'];

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
}else{
	
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
header("Location: ../login.php");
}
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['email']) && isset($_SESSION['password'])){
	if ($access == 3){
		$username = $_SESSION['email'];
		$password = $_SESSION['password'];
		header("location: ../admin.php");
	}
	else if ($access == 2){
		$username = $_SESSION['email'];
		$password = $_SESSION['password'];
		header("location: ../client.php");
	}
	else if ($access == 1){
		$username = $_SESSION['email'];
		$password = $_SESSION['password'];
		header("location: ../client.php");
	}
}else{
	
//3.2 When the user visits the page first time, simple login form will be displayed.
}
exit();
?>