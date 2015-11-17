<?php
require('../includes/con_wed.php');
require('../includes/con_wed2.php');

// escape variables for security
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

$sql="INSERT INTO wednesday (productID, productName, description, gender, category, SKU, stock, cost, price, productImage, productThumb)
VALUES ('$product_id', '$product_name', '$description', '$gender' , '$category', '$sku', '$stock', '$cost' , '$price' , '$img_url' , '$img_thumb' )";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
mysqli_close($connection);
header( 'location: ../admin.php');
}
exit();
?>