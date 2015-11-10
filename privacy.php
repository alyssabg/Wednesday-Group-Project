<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wednesday Cart</title>

<style>
@import url('css/bootstrap.css');
@import url('css/bootstrap.min.css');
@import url('css/full-width-pics.css');
@import url('css/shop-homepage.css');
@import url('css/styles.css');
@import url(https://fonts.googleapis.com/css?family=Montserrat);
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
                         <a href="cart.php"><img src="img/shoppingbag.png"></a>
                    </li>
                </ul>
                         <form class="navbar-form" role="search" action="womenscatalog.php" enctype="multipart/form-data" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
           
          
            	</div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<body>





<div class="container">
    <div class="row">
      <div class="col-md-12">
      
      
      <!---cool stuff goes here-->
      
     	<h1>Privacy Policy and Security Statment</h1><br>
          <h2>Privacy Policy</h2><br>
			<p>We believe shopping online at Wednesday is as secure as shopping at a brick and mortar store. We respect the privacy rights of our customers and recognize the importance of protecting information collected from them.</p>
			<p>We work hard to make sure that we only use your information in the ways that you want us to.</p> 
            <p>This statement explains what information we collect on this website, how and when it is collected, what we use it for now and how we will use it in the future.</p>
			<p>Customers under 18 must inform a guardian or parent regarding the privacy policy before they purchase anything online.</p><br>

    		<p><strong>No Junk Mail</strong></p> 
			<p>We know that nobody likes his or her email inbox cluttered up with junk mail.</p>
			<p>We will only send you marketing messages if you choose to receive them from us. If you choose to receive our emails, we will only send you details about items and promotions which we think will be of interest to you. If you decide that you no longer want to receive emails from us, you care welcome to unsubscribe at any time.</p><br>

			<p><strong>What information do we collect and how will we use it?</strong></p>
			<p>When you place an order with us we collect certain information, which is required to allow us to process your transactions and deliver your orders. This includes your personal details, order details, details of your address(es) and payment details.  We will use this information to process your transaction and dispatch your order.</p>
			<p>For quality control and training purposes, we may monitor or record your communications with us.</p>
			<p>We will keep your information for as long as it is reasonably necessary for these purposes.</p><br>

			<p><strong>What you can expect from us?</strong></p>
			<p>We will at all times comply with the standards, procedures and requirements of US data protection laws to ensure that the personal information you give us is kept appropriately secure and processed fairly and lawfully.</p><br>


			<p><strong>Other people who might use your information</strong></p>
			<p>In order to process your order and deliver your purchases to you we may have to pass your information to some of our service providers. This includes the companies who handle our order dispatch service and our delivery company. Your contact telephone number will be passed on to our courier company who may contact you by phone or text message in order to update you on the delivery date or time of your order.</p>
			<p>We will only provide these companies with the information, which they need to carry out their jobs. They will only be allowed to use your information in the way in which we tell them, and they will not be entitled to use it in their own right.</p>
			<p>We will not pass your information to any third parties outside of Wednesday, except where required to do so as a part of the sale, disposal or transfer of our business, in whole or in part.</p><br>

			<p><strong>And lastly</strong></p>
			<p>This Privacy Statement may change and therefore you should review it regularly. We will of course notify you of any changes where we are required to do so.</p><br>
            
            
          <h2>Security Statment</h2><br>
            <p>If you have any questions relating to this policy and statement or any of your questions were not answered, please email Wednesday@gmail.com.</p><br><br>
            
            
           <p><strong><a href="tax.php">Tax Policy</a></strong></p>
           <p><strong><a href="return.php">Return and Shipping Policy</a></strong></p>
           <p><strong><a href="privacy.php">Privacy Policy and Security Statement</a></strong></p>
           

      </div>
    </div>
</div>









<div class="container" id="pay" style="visibility:hidden;">

   
	<div class="row">
        <div class="col-md-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Shipping Information
                    </h3>
                  <!--  <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Use For Billing
                        </label>
                    </div>-->
                </div>
               
                <div class="panel-body1">
                
                    <form role="form">
                
                    <div class="row">
                        <div class="col-xs-6 col-md-6 pull-right">
                            <div class="form-group">
                                <label for="firstName">
                                    First Name</label>
                                <input type="text" class="form-control" id="firstName"  required />
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-left">
                            <div class="form-group">
                                <label for="lastName">
                                    Last Name</label>
                                <input type="text" class="form-control" id="lastName"  required />
                            </div>
                        </div>
                    </div>
                     <div class="col-xs-12  ">
                            <div class="form-group">
                                <label for="firstName">
                                    Address Line 1</label>
                                <input type="text" class="form-control" id="firstName"  required />
                            </div>
                        </div>
                          <div class="col-xs-12  ">
                            <div class="form-group">
                                <label for="firstName">
                                    Address Line 2</label>
                                <input type="text" class="form-control" id="firstName"  required />
                            </div>
                        </div>
                    
                    
                  
                     <div class="row">
                        <div class="col-xs-4 col-md-4 pull-left">
                            <div class="form-group">
                                <label for="city">
                                    City</label>
                                <input type="text" class="form-control"  id="city" required />
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4 pull-left">
                            <div class="form-group">
                                <label for="state">
                                    State</label>
                                <input type="text" class="form-control" id="state" required />
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4 ">
                            <div class="form-group">
                                <label for="zipCode">
                                    Zip Code</label>
                                <input type="text" class="form-control" id="zipCode" required />
                            </div>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
           
        </div>
        <div class="col-md-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                <!--    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>-->
                </div>
                <div class="panel-body1">
                    <form role="form">
                    <div class="col-xs-12  ">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    </form>
                </div>
            </div>
          
            <br/>
            <a href="confirm.php" class="btn btn-success btn-lg btn-block" role="button" style="color:white;">Pay</a>
        </div>
    </div>

   
</div>


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
    
    <script>
	function showPay() {
		document.getElementById("pay").style.visibility = "visible";
	}
	
	</script>
		
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>