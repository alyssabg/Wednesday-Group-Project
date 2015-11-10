
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
                        <a href="client.php">Sign In</a>
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
        <div class="row">
            <ul class="nav nav-tabs" style="padding: 20px;">
                <li><a data-toggle="tab" href="#menu1"><span class="wed_color">Log In</span></a></li>
                <li><a data-toggle="tab" href="#menu2"><span class="wed_color">Register</span></a></li>
            </ul>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                    <section class="container" style="padding-top: 15px;">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Log In</span></h3>
                                
                                <form method="post" action="php/login_check.php">
                                <fieldset class="clearfix">

                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input name='email' type="text" class="form-control" onFocus="if(this.value == 'E-Mail') this.value = ''" onBlur="if(this.value == '') this.value = 'E-Mail'" value="E-Mail" pattern=".{0,50}" required="required">
                                 </div>
                
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input name='password' type="password" class="form-control" onFocus="if(this.value == 'Password') this.value = ''" onBlur="if(this.value == '') this.value = 'Password'" value="Password" pattern=".{0,14}" required="required">
                                </div>
                                <br />
                                <div class="form-group col-md-6">
                                    <input type="submit" style="background-color: #d824c9" value="Log In" class="btn btn-primary" id="submit"/>
                                </div>
                                </fieldset>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Terms and Conditions</span></h3>
                                <p>
                                    By clicking on "Log In" you agree to The Company's' Terms and Conditions
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

                <div id="menu2" class="tab-pane fade">
                    <section class="container" style="padding-top: 15px;">
                         <div class="container-page">                
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Registration</span></h3>
                                <div id="myForm">
                                <form method="post" action="php/registration_check.php">
                                    <fieldset class="clearfix">

                                        <div class="form-group col-lg-12">
                                            <label>First Name</label>
                                            <input name='first_name' type="text" class="form-control" onFocus="if(this.value == 'First Name') this.value = ''" onBlur="if(this.value == '') this.value = 'First Name'" value="First Name" pattern=".{0,50}" required="required">

                                         </div>

                                         <div class="form-group col-lg-12">
                                            <label>Last Name</label>
                                            <input name='last_name' type="text" class="form-control" onFocus="if(this.value == 'Last Name') this.value = ''" onBlur="if(this.value == '') this.value = 'Last Name'" value="Last Name" pattern=".{0,50}" required="required">
                                         </div>

                                        <div class="form-group col-lg-12">
                                            <label>Email</label>
                                            <input name='email' type="email" class="form-control" onFocus="if(this.value == 'E-Mail') this.value = ''" onBlur="if(this.value == '') this.value = 'E-Mail'" value="E-Mail" pattern=".{0,50}" required="required">
                                         </div>
                        
                                        <div class="form-group col-lg-6">
                                            <label>Password</label>
                                            <input name='password' type="password" class="form-control" onFocus="if(this.value == 'Password') this.value = ''" onBlur="if(this.value == '') this.value = 'Password'" value="Password" pattern=".{6,14}" required="required">
                                        </div>
                        
                                        <div class="form-group col-lg-6">
                                            <label>Confirm Password</label>
                                            <input name='veripass' type="password" class="form-control" onFocus="if(this.value == 'Verify Password') this.value = ''" onBlur="if(this.value == '') this.value = 'Verify Password'" value="Verify Password" pattern=".{6,14}" required="required">
                                        </div>  

                                        <div class="form-group col-lg-12">
                                            <label>Address</label>
                                            <input name='address1' type="text" class="form-control" onFocus="if(this.value == 'Address Line 1') this.value = ''" onBlur="if(this.value == '') this.value = 'Address Line 1'" value="Address Line 1" required="required">
                                         </div>

                                         <div class="form-group col-lg-12">
                                            <input name='address2' type="text" class="form-control" onFocus="if(this.value == 'Address Line 2') this.value = ''" onBlur="if(this.value == '') this.value = 'Address Line 2'" value="Address Line 2" required="required">
                                         </div>

                                         <div class="form-group col-lg-6">
                                            <input name='city' type="text" class="form-control" onFocus="if(this.value == 'City') this.value = ''" onBlur="if(this.value == '') this.value = 'City'" value="City" required="required">
                                         </div>

                                        <div class="form-group col-lg-3">
                                              <select class="form-control" id="State" name="state">
                                                    <option>State</option>
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
                                            <input name='zip' type="tel" class="form-control" onFocus="if(this.value == 'Zip') this.value = ''" onBlur="if(this.value == '') this.value = 'Zip'" value="Zip" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='country' type="text" class="form-control" onFocus="if(this.value == 'United States') this.value = 'United States'" onBlur="if(this.value == 'United States') this.value = 'United States'" value="United States" required="required">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <input name='phone' type="tel" class="form-control" onFocus="if(this.value == 'Phone') this.value = ''" onBlur="if(this.value == '') this.value = 'Phone'" value="Phone" required="required">
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
                                        <div class="form-group col-md-6">
                                            <input type="submit" style="background-color: #d824c9" value="Register" class="btn btn-primary" id="submit"/>
                                        </div>
                                    </fieldset>
                                </form>
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <h3 class="dark-grey"><span class="wed_color">Terms and Conditions</span></h3>
                                <p>
                                    By clicking on "Register" you agree to The Company's' Terms and Conditions
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