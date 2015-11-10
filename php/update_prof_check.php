<?php
require('../includes/con_wed.php');
require('../includes/con_wed2.php');

$old_email = $_SESSION['email'];
$old_password = $_SESSION['password'];
$userID = "SELECT userID WHERE email='$old_email'";

// escape variables for security
$new_email = mysqli_real_escape_string($con, $_POST['new_email_prof']);
$new_password = sha1(mysqli_real_escape_string($con, $_POST['new_password_prof']));
$veripass = sha1(mysqli_real_escape_string($con, $_POST['veripass']));
$first_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_first_prof']));
$last_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_last_prof']));
$address1 = mysqli_real_escape_string($con, $_POST['new_address1_prof']);
$address2 = mysqli_real_escape_string($con, $_POST['new_address2_prof']);
if($address2 ==''){
	$address3='';
}

else {
	$address3=$address2;
}
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$zip = mysqli_real_escape_string($con, $_POST['zip']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$UserStatus='1';

$query = "SELECT UserEmail FROM users WHERE UserEmail='$email'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
if($count >= 1){
	//redirect if failed
    header("location:../login.php");
}

else if($new_password =='Password' || $new_password =='password'){
	 //redirect if failed
    header("location:edit_profile.php");
}

else if($veripass =='Password' || $veripass =='password'
		|| $veripass =='Verify Password'){
	 //redirect if failed
    header("location:edit_profile.php");
}

else if($new_password != $veripass){
	 //redirect if failed
    header("location:edit_profile.php");
}

else if($country !='United States'){
	//redirect if failed
	header("location:edit_profile.php");
}

else if($new_password == $veripass){


$sql="UPDATE users
	  SET users.UserFirstName='$first_name' , users.UserLastName='$last_name' , users.UserEmail='$new_email'  , users.UserPassword='$old_password' , users.UserAddress='$address1' , users.UserAddress2='$address3' , users.UserCity='$city' , users.UserState='$state' , users.UserZip='$zip' , users.UserCountry='$country' , users.UserPhone='$phone' 
	  WHERE userID='$userID'";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else{
$_SESSION['email'] = $new_email;
$_SESSION['password'] = $new_password;
header( 'location: ../client.php');
}
}
exit();
?>