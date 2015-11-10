<?php
require('../includes/con_wed.php');
require('../includes/con_wed2.php');

// escape variables for security
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = sha1(mysqli_real_escape_string($con, $_POST['password']));
$veripass = sha1(mysqli_real_escape_string($con, $_POST['veripass']));
$first_name = ucfirst(mysqli_real_escape_string($con, $_POST['first_name']));
$last_name = ucfirst(mysqli_real_escape_string($con, $_POST['last_name']));
$address1 = mysqli_real_escape_string($con, $_POST['address1']);
$address2 = mysqli_real_escape_string($con, $_POST['address2']);
if($address2 =='Address Line 2'){
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

else if($email =='Email'){
	//redirect if failed
    header("location:../login.php");
}

else if($password =='Password' || $password =='password'){
	 //redirect if failed
    header("location:../login.php");
}

else if($veripass =='Password' || $veripass =='password'
		|| $veripass =='Verify Password'){
	 //redirect if failed
    header("location:../login.php");
}

else if($password != $veripass){
	 //redirect if failed
    header("location:../login.php");
}

else if($first_name =='First Name'){
	 //redirect if failed
    header("location:../login.php");
}

else if($last_name =='Last Name'){
	//redirect if failed
	header("location:../login.php");
}

else if($address1 =='Address Line 1'){
	//redirect if failed
	header("location:../login.php");
}

else if($city =='City'){
	//redirect if failed
	header("location:../login.php");
}

else if($state =='State'){
	//redirect if failed
	header("location:../login.php");
}

else if($zip =='Zip'){
	//redirect if failed
	header("location:../login.php");
}

else if($country =='Please select a country'){
	//redirect if failed
	header("location:../login.php");
}

else if($phone =='Phone'){
	//redirect if failed
	header("location:../login.php");
}

else if($password == $veripass){

$sql="INSERT INTO users (UserEmail, UserPassword, UserFirstName, UserLastName, UserCity, UserState, UserZip, UserPhone, UserCountry, UserAddress, UserAddress2, UserStatus)
VALUES ('$email', '$password', '$first_name', '$last_name', '$city', '$state', '$zip', '$phone' , '$country' , '$address1' , '$address3' , '$UserStatus' )";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
mysqli_close($connection);
header( 'location: ../login.php');
}
exit();
?>