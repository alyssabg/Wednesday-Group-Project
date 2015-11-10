<?php
session_start();
require('../includes/con_wed.php');
require('../includes/con_wed2.php');
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = "SELECT * FROM users WHERE UserEmail='$email' and UserPassword='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
$row = mysql_fetch_assoc($result); 

if($count != 1){
    header("Location: ../login.php");
    
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />

<title>Wednesday Client</title>

<style>
@import url('../css/bootstrap.css');
@import url('../css/bootstrap.min.css');
@import url('../css/full-width-pics.css');
@import url('../css/shop-homepage.css');
@import url('../css/styles.css');
@import url(https://fonts.googleapis.com/css?family=Montserrat);

.wed_color {
    color: #d824c9;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<?php include_once("../analyticstracking.php") ?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
           	<div class="mobilelogo">
            		<a href="../home.php"><img src="../img/wednesday_logo1.png" alt=""></a>
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
            <div class="col-lg-4"><a href="../home.php"><img src="../img/wednesday_logo1.png" alt="Wednesday"></a></div>
            </div>
            <div class="col-lg-8">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="../home.php">Home</a>
                        	
                    </li>
                    <li>
                        <a href="../womenscatalog.php">Women</a>
                    </li>
                    <li>
                        <a href="../menscatalog.php">Men</a>
                    </li>
                     <li>
                        <a href="../about.php">About</a>
                    </li>
                    <li>
                        <a href="../logout.php">Sign Out</a>
                    </li>
                  
                 <li>
                         <a href="../cart.php"><img src="../img/shoppingbag.png" alt=""></a>
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
                <li><a data-toggle="tab" href="#profile"><span class="wed_color">Profile</span></a></li>
                <li><a data-toggle="tab" href="#billing"><span class="wed_color">Billing Information</span></a></li>
                <li><a data-toggle="tab" href="#shipping"><span class="wed_color">Shipping Information</span></a></li>
            </ul>

            <div class="tab-content" style="margin-top: -50px;">
                <div id="profile" class="tab-pane fade">
                    <section class="container">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Update Profile</span></h3>
                                <div id="myForm">
                                <form method="post" action="../update_prof_check.php">
                                    <fieldset class="clearfix">

                                        <div class="form-group col-lg-12">
                                            <label>First Name</label>
                                            <input name='new_first_prof' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserFirstName'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserFirstName'];?>'" value="<?php echo $row['UserFirstName'];?>" pattern=".{0,50}" required="required">

                                         </div>

                                         <div class="form-group col-lg-12">
                                            <label>Last Name</label>
                                            <input name='new_last_prof' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserLastName'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserLastName'];?>'" value="<?php echo $row['UserLastName'];?>" pattern=".{0,50}" required="required">
                                         </div>

                                        <div class="form-group col-lg-12">
                                            <label>Email</label>
                                            <input name='new_email_prof' type="email" class="form-control" onFocus="if(this.value == '<?php echo $row['UserEmail'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserEmail'];?>'" value="<?php echo $row['UserEmail'];?>" pattern=".{0,50}" required="required">
                                         </div>
                        
                                        <div class="form-group col-lg-6">
                                            <label>Password (Hidden for Security)</label>
                                            <input name='new_password' type="password" class="form-control" onFocus="if(this.value == '<?php echo $row['UserPassword'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserPassword'];?>'" value="<?php echo $row['UserPassword'];?>" pattern=".{6,14}">
                                        </div>
                        
                                        <div class="form-group col-lg-6">
                                            <label>Confirm Password</label>
                                            <input name='veripass' type="password" class="form-control" onFocus="if(this.value == '<?php echo $row['UserPassword'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserPassword'];?>'" value="<?php echo $row['UserPassword'];?>" pattern=".{6,14}">
                                        </div>  

                                        <div class="form-group col-lg-12">
                                            <label>Address</label>
                                            <input name='new_address1_prof' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddress'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddress'];?>'" value="<?php echo $row['UserAddress'];?>" required="required">
                                         </div>

                                         <div class="form-group col-lg-12">
                                            <input name='new_address2_prof' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddress2'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddress2'];?>'" value="<?php echo $row['UserAddress2'];?>" >
                                         </div>

                                         <div class="form-group col-lg-6">
                                            <input name='new_city_prof' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCity'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCity'];?>'" value="<?php echo $row['UserCity'];?>" required="required">
                                         </div>

                                        <div class="form-group col-lg-3">
                                              <select class="form-control" id="State" name="new_state_prof">
                                                    <option><?php echo $row['UserState'];?></option>
                                                    <option>AK</option>
                                                    <option>AL</option>
                                                    <option>AZ</option>
                                                    <option>AR</option>
                                                    <option>CA</option>
                                                    <option>CO</option>
                                                    <option>CT</option>
                                                    <option>DE</option>
                                                    <option>FL</option>
                                                    <option>GA</option>
                                                    <option>HI</option>
                                                    <option>ID</option>
                                                    <option>IL</option>
                                                    <option>IN</option>
                                                    <option>IA</option>
                                                    <option>KS</option>
                                                    <option>KY</option>
                                                    <option>LA</option>
                                                    <option>ME</option>
                                                    <option>MD</option>
                                                    <option>MA</option>
                                                    <option>MI</option>
                                                    <option>MN</option>
                                                    <option>MS</option>
                                                    <option>MO</option>
                                                    <option>MT</option>
                                                    <option>NE</option>
                                                    <option>NV</option>
                                                    <option>NH</option>
                                                    <option>NJ</option>
                                                    <option>NM</option>
                                                    <option>NY</option>
                                                    <option>NC</option>
                                                    <option>ND</option>
                                                    <option>OH</option>
                                                    <option>OK</option>
                                                    <option>OR</option>
                                                    <option>PA</option>
                                                    <option>RI</option>
                                                    <option>SC</option>
                                                    <option>SD</option>
                                                    <option>TN</option>
                                                    <option>TX</option>
                                                    <option>UT</option>
                                                    <option>VT</option>
                                                    <option>VA</option>
                                                    <option>WA</option>
                                                    <option>WV</option>
                                                    <option>WI</option>
                                                    <option>WY</option>
                                              </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-3">
                                            <input name='new_zip_prof' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserZip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserZip'];?>'" value="<?php echo $row['UserZip'];?>" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='new_country_prof' type="text" class="form-control" onFocus="if(this.value == 'United States') this.value = 'United States'" onBlur="if(this.value == 'United States') this.value = 'United States'" value="United States" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='new_phone_prof' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserPhone'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserPhone'];?>'" value="<?php echo $row['UserPhone'];?>" required="required">
                                        </div>

                                        <!--
                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Sign up for our newsletter
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Send notifications to this email
                                        </div>              
                                        -->
                                        <br />
                                        <div class="form-group col-lg-12">
                                            <br />
                                            <p>*For security purposes you will need to log in again after updating profile*</p>
                                            <input type="submit" style="background-color: #d824c9;" value="Update" class="btn btn-primary" id="submit"/>
                                            <a href="../client.php"><button type="button" style="background-color: #f4f4f4;" class="btn"><span class="wed_color">Cancel</span></button></a>
                                        </div>
                                    </fieldset>
                                </form>
                                </div>
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
                                <h3 class="dark-grey"><span class="wed_color">Update Billing Information</span></h3>
                                <div id="myForm">
                                <form method="post" action="../update_bill_check.php">
                                    <fieldset class="clearfix">

                                        <div class="form-group col-lg-12">
                                            <label>First Name</label>
                                            <input name='first_name' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserFirstBill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserFirstBill'];?>'" value="<?php echo $row['UserFirstBill'];?>" pattern=".{0,50}" required="required">

                                         </div>

                                         <div class="form-group col-lg-12">
                                            <label>Last Name</label>
                                            <input name='last_name' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserLastBill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserLastBill'];?>'" value="<?php echo $row['UserLastBill'];?>" pattern=".{0,50}" required="required">
                                         </div>

                                        <div class="form-group col-lg-12">
                                            <label>Credit Card</label>
                                            <input name='creditcard' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCreditCard'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCreditCard'];?>'" value="<?php echo $row['UserCreditCard'];?>" pattern="[0-9]{13,16}" required="required">
                                         </div>
                        
                                        <div class="form-group col-lg-12">
                                            <label>Re-Type Credit Card</label>
                                            <input name='vericard' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCreditCard'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCreditCard'];?>'" value="<?php echo $row['UserCreditCard'];?>" pattern="[0-9]{13,16}" required="required">
                                         </div> 

                                         <div class="form-group col-lg-12">
                                            <label>CCV</label>
                                            <input name='ccv' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCCV'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCCV'];?>'" value="<?php echo $row['UserCCV'];?>" pattern="[0-9]{3,3}" required="required">
                                         </div>

                                        <div class="form-group col-lg-12">
                                            <label>Address</label>
                                            <input name='address1' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddressBill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddressBill'];?>'" value="<?php echo $row['UserAddressBill'];?>" required="required">
                                         </div>

                                         <div class="form-group col-lg-12">
                                            <input name='address2' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddress2Bill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddress2Bill'];?>'" value="<?php echo $row['UserAddress2Bill'];?>" required="required">
                                         </div>

                                         <div class="form-group col-lg-6">
                                            <input name='city' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCityBill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCityBill'];?>'" value="<?php echo $row['UserCityBill'];?>" required="required">
                                         </div>

                                        <div class="form-group col-lg-3">
                                              <select class="form-control" id="State" name="state">
                                                    <option><?php echo $row['UserStateBill'];?></option>
                                                    <option>AK</option>
                                                    <option>AL</option>
                                                    <option>AZ</option>
                                                    <option>AR</option>
                                                    <option>CA</option>
                                                    <option>CO</option>
                                                    <option>CT</option>
                                                    <option>DE</option>
                                                    <option>FL</option>
                                                    <option>GA</option>
                                                    <option>HI</option>
                                                    <option>ID</option>
                                                    <option>IL</option>
                                                    <option>IN</option>
                                                    <option>IA</option>
                                                    <option>KS</option>
                                                    <option>KY</option>
                                                    <option>LA</option>
                                                    <option>ME</option>
                                                    <option>MD</option>
                                                    <option>MA</option>
                                                    <option>MI</option>
                                                    <option>MN</option>
                                                    <option>MS</option>
                                                    <option>MO</option>
                                                    <option>MT</option>
                                                    <option>NE</option>
                                                    <option>NV</option>
                                                    <option>NH</option>
                                                    <option>NJ</option>
                                                    <option>NM</option>
                                                    <option>NY</option>
                                                    <option>NC</option>
                                                    <option>ND</option>
                                                    <option>OH</option>
                                                    <option>OK</option>
                                                    <option>OR</option>
                                                    <option>PA</option>
                                                    <option>RI</option>
                                                    <option>SC</option>
                                                    <option>SD</option>
                                                    <option>TN</option>
                                                    <option>TX</option>
                                                    <option>UT</option>
                                                    <option>VT</option>
                                                    <option>VA</option>
                                                    <option>WA</option>
                                                    <option>WV</option>
                                                    <option>WI</option>
                                                    <option>WY</option>
                                              </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-3">
                                            <input name='zip' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserZipBill'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserZip'];?>'" value="<?php echo $row['UserZip'];?>" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='country' type="text" class="form-control" onFocus="if(this.value == 'United States') this.value = 'United States'" onBlur="if(this.value == 'United States') this.value = 'United States'" value="United States" required="required">
                                        </div>
                                        <br />
                                        <!--
                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Sign up for our newsletter
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Send notifications to this email
                                        </div>              
                                        -->
                                        <div class="form-group col-lg-12">
                                            <br />
                                            <input type="submit" style="background-color: #d824c9;" value="Update" class="btn btn-primary" id="submit"/>
                                            <a href="../client.php"><button type="button" style="background-color: #f4f4f4;" class="btn"><span class="wed_color">Cancel</span></button></a>
                                        </div>
                                    </fieldset>
                                </form>
                                </div>
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
                                <h3 class="dark-grey"><span class="wed_color">Update Shipping Information</span></h3>
                                <div id="myForm">
                                <form method="post" action="../update_ship_check.php">
                                    <fieldset class="clearfix">

                                        <div class="form-group col-lg-12">
                                            <label>First Name</label>
                                            <input name='first_name' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserFirstNameShip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserFirstNameShip'];?>'" value="<?php echo $row['UserFirstNameShip'];?>" pattern=".{0,50}" required="required">

                                         </div>

                                         <div class="form-group col-lg-12">
                                            <label>Last Name</label>
                                            <input name='last_name' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserLastNameShip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserLastNameShip'];?>'" value="<?php echo $row['UserLastNameShip'];?>" pattern=".{0,50}" required="required">
                                         </div>

                                        <div class="form-group col-lg-12">
                                            <label>Address</label>
                                            <input name='address1' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddressShip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddressShip'];?>'" value="<?php echo $row['UserAddressShip'];?>" required="required">
                                         </div>

                                         <div class="form-group col-lg-12">
                                            <input name='address2' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserAddress2Ship'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserAddress2Ship'];?>'" value="<?php echo $row['UserAddress2Ship'];?>" required="required">
                                         </div>

                                         <div class="form-group col-lg-6">
                                            <input name='city' type="text" class="form-control" onFocus="if(this.value == '<?php echo $row['UserCityShip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserCityShip'];?>'" value="<?php echo $row['UserCityShip'];?>" required="required">
                                         </div>

                                        <div class="form-group col-lg-3">
                                              <select class="form-control" id="State" name="state">
                                                    <option><?php echo $row['UserStateShip'];?></option>
                                                    <option>AK</option>
                                                    <option>AL</option>
                                                    <option>AZ</option>
                                                    <option>AR</option>
                                                    <option>CA</option>
                                                    <option>CO</option>
                                                    <option>CT</option>
                                                    <option>DE</option>
                                                    <option>FL</option>
                                                    <option>GA</option>
                                                    <option>HI</option>
                                                    <option>ID</option>
                                                    <option>IL</option>
                                                    <option>IN</option>
                                                    <option>IA</option>
                                                    <option>KS</option>
                                                    <option>KY</option>
                                                    <option>LA</option>
                                                    <option>ME</option>
                                                    <option>MD</option>
                                                    <option>MA</option>
                                                    <option>MI</option>
                                                    <option>MN</option>
                                                    <option>MS</option>
                                                    <option>MO</option>
                                                    <option>MT</option>
                                                    <option>NE</option>
                                                    <option>NV</option>
                                                    <option>NH</option>
                                                    <option>NJ</option>
                                                    <option>NM</option>
                                                    <option>NY</option>
                                                    <option>NC</option>
                                                    <option>ND</option>
                                                    <option>OH</option>
                                                    <option>OK</option>
                                                    <option>OR</option>
                                                    <option>PA</option>
                                                    <option>RI</option>
                                                    <option>SC</option>
                                                    <option>SD</option>
                                                    <option>TN</option>
                                                    <option>TX</option>
                                                    <option>UT</option>
                                                    <option>VT</option>
                                                    <option>VA</option>
                                                    <option>WA</option>
                                                    <option>WV</option>
                                                    <option>WI</option>
                                                    <option>WY</option>
                                              </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-3">
                                            <input name='zip' type="tel" class="form-control" onFocus="if(this.value == '<?php echo $row['UserZipShip'];?>') this.value = ''" onBlur="if(this.value == '') this.value = '<?php echo $row['UserZipShip'];?>'" value="<?php echo $row['UserZipShip'];?>" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='country' type="text" class="form-control" onFocus="if(this.value == 'United States') this.value = 'United States'" onBlur="if(this.value == 'United States') this.value = 'United States'" value="United States" required="required">
                                        </div>
                                        <br />
                                        <!--
                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Sign up for our newsletter
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="checkbox" class="checkbox" />Send notifications to this email
                                        </div>              
                                        -->
                                        <div class="form-group col-lg-12">
                                            <br />
                                            <input type="submit" style="background-color: #d824c9;" value="Update" class="btn btn-primary" id="submit"/>
                                            <a href="../client.php"><button type="button" style="background-color: #f4f4f4;" class="btn"><span class="wed_color">Cancel</span></button></a>
                                        </div>
                                    </fieldset>
                                </form>
                                </div>
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>