<?php
session_start();
require('includes/con_wed.php');
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_assoc($result); 

if($count != 1){
    header("Location: login.php");
    
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

<title>Wednesday Client</title>

<style>
@import url('css/bootstrap.css');
@import url('css/bootstrap.min.css');
@import url('css/full-width-pics.css');
@import url('css/shop-homepage.css');
@import url('css/styles.css');
@import url(https://fonts.googleapis.com/css?family=Montserrat);

.wed_color {
    color: #d824c9;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
           	<div class="mobilelogo">
            		<a href="home.php"><img src="img/wednesday_logo1.png" alt=""></a>
            	</div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
               <!-- <a class="navbar-brand" href="#">Start Bootstrap</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="logo">
            <div class="col-lg-4"><a href="home.php"><img src="img/wednesday_logo1.png" alt="Wednesday"></a></div>
            </div>
            <div class="col-lg-8">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="home.php">Home</a>
                        	
                    </li>
                    <li>
                        <a href="womenscatalog.php">Women</a>
                    </li>
                    <li>
                        <a href="menscatalog.php">Men</a>
                    </li>
                     <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="logout.php">Sign Out</a>
                    </li>
                  
                 <li>
                         <a href="cart.php"><img src="img/shoppingbag.png" alt=""></a>
                    </li>
                </ul>
               <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
           
           <!-- <a href="#"><img src="img/shoppingbag.png"></a>-->
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <section style="padding-top: 15px;">
    <div class="container">
        
        <h2><span class="wed_color">Welcome</span> <i><?php echo $row['UserFirstName'];?> <?php echo $row['UserLastName'];?></i></h2>
        
        <br />

        <div class="row" style="margin-bottom: 10px;">
            <ul class="nav nav-tabs" style="padding: 20px;">
                <li><a data-toggle="tab" href="#recent"><span class="wed_color">Recent Orders</span></a></li>
                <li><a data-toggle="tab" href="#profile"><span class="wed_color">Profile</span></a></li>
                <li><a data-toggle="tab" href="#billing"><span class="wed_color">Billing Information</span></a></li>
                <li><a data-toggle="tab" href="#shipping"><span class="wed_color">Shipping Information</span></a></li>
            </ul>
            </div>
        </section>

            <div class="tab-content" style="margin-top: -150px;">
                <div id="recent" class="tab-pane fade in active">
                    <section class="container" style="margin-bottom: 13%;">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Recent Orders</span></h3>
                                <p> You have no recent orders to display </p>
                                <!-- start php
                                    query SELECT * FROM Orders WHERE UserID=$UserID;

                                    echo those orders
                                -->
                            </div>
                        </div>
                    </section>
                </div>
                <div id="profile" class="tab-pane fade">
                    <section class="container">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Profile Overview</span></h3>
                                <p>
                                    First Name: <?php echo $row['UserFirstName'];?>
                                </p>

                                <p>
                                    Last Name: <?php echo $row['UserLastName'];?>
                                </p>

                                <p>
                                    Email: <?php echo $row['UserEmail'];?>
                                </p>

                                <p>
                                    Password:</span> Your password is hidden for security.
                                </p>

                                <p>
                                    Address Line 1: <?php echo $row['UserAddress'];?>
                                </p>

                                <p>
                                    Address Line 2: <?php echo $row['UserAddress2'];?>
                                </p>

                                <p>
                                    City: <?php echo $row['UserCity'];?>
                                </p>

                                <p>
                                    State: <?php echo $row['UserState'];?>
                                </p>

                                <p>
                                    Zip: <?php echo $row['UserZip'];?>
                                </p>

                                <p>
                                    Phone: <?php echo $row['UserPhone'];?>
                                </p>
                                <br />
                                <a href="php/edit_profile.php" style="padding-left:0px;"><input type="submit" style="background-color: #d824c9;" value="Update Profile" class="btn btn-primary" id="submit"/></a>

                            </div>
        
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Terms and Conditions</span></h3>
                                <p>
                                    By clicking on "Update" you agree to The Company's' Terms and Conditions
                                </p>
                                <p>
                                    While rare, prices are subject to change based on exchange rate fluctuations - 
                                    should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                                </p>
                                <p>
                                    Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                                </p>
                                <p>
                                    Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                                </p>
                
                            </div>
                        </div>
                    </section>
                </div>

                    <div id="billing" class="tab-pane fade">
                    <section class="container">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Billing Information</span></h3>
                                <p>
                                    First Name: <?php echo $row['UserFirstBill'];?>
                                </p>

                                <p>
                                    Last Name: <?php echo $row['UserLastBill'];?>
                                </p>

                                <p>
                                    Credit Card: <?php echo $row['UserCreditCard'];?>
                                </p>

                                <p>
                                    CCV: <?php echo $row['UserCCV'];?>
                                </p>

                                <p>
                                    Address Line 1: <?php echo $row['UserAddressBill'];?>
                                </p>

                                <p>
                                    Address Line 2: <?php echo $row['UserAddress2Bill'];?>
                                </p>

                                <p>
                                    City: <?php echo $row['UserCityBill'];?>
                                </p>

                                <p>
                                    State: <?php echo $row['UserStateBill'];?>
                                </p>

                                <p>
                                    Zip: <?php echo $row['UserZipBill'];?>
                                </p>
                                <br />
                                <a href="php/edit_profile.php" style="padding-left:0px;"><input type="submit" style="background-color: #d824c9;" value="Update Billing" class="btn btn-primary" id="submit"/></a>

                            </div>
        
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Terms and Conditions</span></h3>
                                <p>
                                    By clicking on "Update" you agree to The Company's' Terms and Conditions
                                </p>
                                <p>
                                    While rare, prices are subject to change based on exchange rate fluctuations - 
                                    should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                                </p>
                                <p>
                                    Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                                </p>
                                <p>
                                    Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                                </p>
                
                            </div>
                        </div>
                    </section>
                </div>



                    <div id="shipping" class="tab-pane fade">
                    <section class="container">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Shipping Information</span></h3>
                                <p>
                                    First Name: <?php echo $row['UserFirstNameShip'];?>
                                </p>

                                <p>
                                    Last Name: <?php echo $row['UserLastNameShip'];?>
                                </p>


                                <p>
                                    Address: <?php echo $row['UserAddressShip'];?>
                                </p>

                                <p>
                                    Address Line 2: <?php echo $row['UserAddress2Ship'];?>
                                </p>

                                <p>
                                    City: <?php echo $row['UserCityShip'];?>
                                </p>

                                <p>
                                    State: <?php echo $row['UserStateShip'];?>
                                </p>

                                <p>
                                    Zip: <?php echo $row['UserZipShip'];?>
                                </p>
                                <br />

                                <a href="php/edit_profile.php" style="padding-left:0px;"><input type="submit" style="background-color: #d824c9;" value="Update Shipping" class="btn btn-primary" id="submit"/></a>

                            </div>
        
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Terms and Conditions</span></h3>
                                <p>
                                    By clicking on "Update" you agree to The Company's' Terms and Conditions
                                </p>
                                <p>
                                    While rare, prices are subject to change based on exchange rate fluctuations - 
                                    should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                                </p>
                                <p>
                                    Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                                </p>
                                <p>
                                    Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                                </p>
                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <br />
        <br />
        <hr>
    
    
  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>This site is not official and is an assignment for a UCF Digital Media course</p>
                    <p>designed by Wednesday</p>
                   
                </div>
                <div class="col-lg-3">
                	<p><strong>Contact</strong></p>
                    <p>1-800-2468</p>
                    <p>4000 Central Florida Blvd</p>
                    <p>Orlando, FL 32816</p>
                </div>
                  <div class="col-lg-3">
                	<i class="fa fa-facebook fa-2x"></i>
                    <i class="fa fa-twitter fa-2x"></i>
                    <i class="fa fa-google-plus fa-2x"></i>
                    <i class="fa fa-pinterest-p fa-2x"></i>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>