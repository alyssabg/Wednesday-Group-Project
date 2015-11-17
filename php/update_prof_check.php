<?php
session_start();
require('../includes/con_wed2.php');

$old_email = $_SESSION['email'];
$old_password = $_SESSION['password'];
$userID = "SELECT UserID FROM users WHERE UserEmail='$old_email'";

// escape variables for security
$email = mysqli_real_escape_string($con, $_POST['new_email_prof']);
$password = sha1(mysqli_real_escape_string($con, $_POST['new_password_prof']));
$veripass = sha1(mysqli_real_escape_string($con, $_POST['veripass_prof']));
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
$city = mysqli_real_escape_string($con, $_POST['new_city_prof']);
$state = mysqli_real_escape_string($con, $_POST['new_state_prof']);
$zip = mysqli_real_escape_string($con, $_POST['new_zip_prof']);
$country = mysqli_real_escape_string($con, $_POST['new_country_prof']);
$phone = mysqli_real_escape_string($con, $_POST['new_phone_prof']);
$UserStatus='1';

if($email == 'Email' || $password== 'Password' || $veripass =='Verify Password' ||  $first_name == 'First Name' || $last_name =='Last Name' || $address1 =='Address Line 1' || $address2 =='Address Line 2' || $city =='City' || $state =='State' || $zip =='Zip' || $country !='United States' || $phone =='Phone'){
	
   //redirect if failed
   header( 'location: edit_profile.php');
}
else if ($password != $veripass){
	header( 'location: edit_profile.php');
}
else if ($password==$veripass){
$sql="UPDATE users
	  SET UserEmail='$email' , UserPassword='$password' , UserFirstName='$first_name' , UserLastName='$last_name' , UserCity='$city' , UserState='$state' , UserZip='$zip' , UserPhone='$phone' , UserAddress='$address1' , UserAddress2='$address3'
	  WHERE UserEmail='$old_email' AND UserPassword='$old_password'";



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else{
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
header( 'Location: ../client.php');
}
}
exit();
?>
