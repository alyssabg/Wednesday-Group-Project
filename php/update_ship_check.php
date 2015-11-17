<?php
session_start();
require('../includes/con_wed2.php');

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$userID = "SELECT UserID FROM users WHERE UserEmail='$old_email'";

// escape variables for security
$first_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_first_ship']));
$last_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_last_ship']));

$address1 = mysqli_real_escape_string($con, $_POST['new_address1_ship']);
$address2 = mysqli_real_escape_string($con, $_POST['new_address2_ship']);
if($address2 ==''){
	$address3='';
}

else {
	$address3=$address2;
}
$city = mysqli_real_escape_string($con, $_POST['new_city_ship']);
$state = mysqli_real_escape_string($con, $_POST['new_state_ship']);
$zip = mysqli_real_escape_string($con, $_POST['new_zip_ship']);
$country = mysqli_real_escape_string($con, $_POST['new_country_ship']);

if($first_name == 'First Name' || $last_name =='Last Name' ||  $address1 =='Address Line 1' || $address2 =='Address Line 2' || $city =='City' || $state =='State' || $zip =='Zip' || $country !='United States'){
	
   //redirect if failed
   header( 'location: edit_profile.php');
}
else if ($cc != $vcc){
	header( 'location: edit_profile.php');
}
else if ($cc==$vcc){
$sql="UPDATE users
	  SET UserFirstNameShip='$first_name' , UserLastNameShip='$last_name' , UserCityShip='$city' , UserStateShip='$state' , UserZipShip='$zip' , UserAddressShip='$address1' , UserAddress2Ship='$address3' , UserCountryShip='$country'
	  WHERE UserEmail='$email' AND UserPassword='$password'";



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else{
header( 'Location: ../client.php');
}
}
exit();
?>
