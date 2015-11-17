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

$product_id = mysqli_real_escape_string($con, $_POST['product_id']);
$product_name = ucfirst(mysqli_real_escape_string($con, $_POST['product_name']));
$description = ucfirst(mysqli_real_escape_string($con, $_POST['description']));
$gender = ucfirst(mysqli_real_escape_string($con, $_POST['gender']));
$category = ucfirst(mysqli_real_escape_string($con, $_POST['category']));
$sku = mysqli_real_escape_string($con, $_POST['sku']);
$stock = mysqli_real_escape_string($con, $_POST['stock']);
$cost = mysqli_real_escape_string($con, $_POST['cost']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$weight = mysqli_real_escape_string($con, $_POST['weight']);
$img_thumb = mysqli_real_escape_string($con, $_POST['img_thumb']);
$img_url = mysqli_real_escape_string($con, $_POST['img_url']);


if($product_id =='Product ID'){
	//redirect if failed
    header("location:../admin.php");
}

else if($product_name =='Product Name'){
	//redirect if failed
    header("location:../admin.php");
}

else if($description =='Description'){
	 //redirect if failed
    header("location:../admin.php");
}

else if($gender =='Gender'){
	 //redirect if failed
    header("location:../admin.php");
}

else if($category =='Category'){
	//redirect if failed
	header("location:../admin.php");
}

else if($sku =='SKU'){
	//redirect if failed
	header("location:../admin.php");
}

else if($stock =='Stock'){
	//redirect if failed
	header("location:../admin.php");
}

else if($cost =='Cost'){
	//redirect if failed
	header("location:../admin.php");
}

else if($price =='Price'){
	//redirect if failed
	header("location:../admin.php");
}

else if($weight =='Product Weight'){
	//redirect if failed
	header("location:../admin.php");
}

else if($img_thumb =='Image URL' || $img_url =='img/items/thumbs/'){
	//redirect if failed
	header("location:../admin.php");
}

else if($img_url =='Image Thumbnail URL' || $img_url =='img/items/'){
	//redirect if failed
	header("location:../admin.php");
}

else {

$sql="UPDATE wednesday
	  SET UserEmail='$email' , UserPassword='$password' , UserFirstName='$first_name' , UserLastName='$last_name' , UserCity='$city' , UserState='$state' , UserZip='$zip' , UserPhone='$phone' , UserAddress='$address1' , UserAddress2='$address3'
	  WHERE productID='$productID'";
}

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

else{
	header("Location: ../admin.php")
}

exit();
?>