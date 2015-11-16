<?php
session_start();
require('../includes/con_wed2.php');

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$userID = "SELECT UserID FROM users WHERE UserEmail='$old_email'";

// escape variables for security
$first_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_first_bill']));
$last_name = ucfirst(mysqli_real_escape_string($con, $_POST['new_last_bill']));
$cc = mysqli_real_escape_string($con, $_POST['cc']);
$vcc = mysqli_real_escape_string($con, $_POST['vcc']);
$ccv = mysqli_real_escape_string($con, $_POST['ccv']);
$address1 = mysqli_real_escape_string($con, $_POST['new_address1_bill']);
$address2 = mysqli_real_escape_string($con, $_POST['new_address2_bill']);
if($address2 ==''){
	$address3='';
}

else {
	$address3=$address2;
}
$city = mysqli_real_escape_string($con, $_POST['new_city_bill']);
$state = mysqli_real_escape_string($con, $_POST['new_state_bill']);
$zip = mysqli_real_escape_string($con, $_POST['new_zip_bill']);
$country = mysqli_real_escape_string($con, $_POST['new_country_bill']);

if($first_name == 'First Name' || $last_name =='Last Name' || $cc =='Credit Card' || $vcc =='Verify Credit Card' || $ccv =='Credit Card Verification' ||  $address1 =='Address Line 1' || $address2 =='Address Line 2' || $city =='City' || $state =='State' || $zip =='Zip' || $country !='United States'){
	
   //redirect if failed
   header( 'location: edit_profile.php');
}
else if ($cc != $vcc){
	header( 'location: edit_profile.php');
}
else if ($cc==$vcc){
$sql="UPDATE users
	  SET UserFirstBill='$first_name' , UserLastBill='$last_name' , UserCityBill='$city' , UserStateBill='$state' , UserZipBill='$zip' , UserCreditCard='$cc' , UserAddressBill='$address1' , UserAddress2Bill='$address3' , UserCCV='$ccv'
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
?>