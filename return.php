<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wednesday Return</title>

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
      
      	<h1>Return and Shipping Policy</h1><br>
			
            <p><strong>Return Policy</strong></p>
			<p>If for any reason you are not satisfied with the order you have made with Wednesday, please return items within 30 days of receipt.</p>
			<p>There will be a return and exchange invoice included in every order.</p>
			<p>We'll accept the return or exchange of unworn, unwashed or defective items.</p>
			<p>Merchandise must be in new condition with tags attached and must be accompanied by the original receipt.</p>
			<p>Your refund will be credited back to the original method of payment used to make the purchase.</p>
			<p>Returns will be accepted through mail only.</p>
			<p>Shipping charges will not be refunded unless the order was an error by us.</p><br>

			<p>There may be a limited amount of stock for an item.</p>
			<p>We suggest ordering a new item and return the item you do not want.</p>
			<p>If you have requested an exchange, you will receive an email detailing the availability of the item and its shipping status.</p>
			<p>Items in stock will be shipped within 48 to 78 hours to the shipping address.</p>
			<p>If the item was sent to you as a gift, the refund will be credited to the original credit card used for the payment.</p>
			<p>No additional shipping & handling charges will be added with exchanges.</p>
			<p>Expect 7-14 days for the return to be processed.</p>
			<p>We will send you an email confirming that your return or exchange has been processed.</p>
			<p>Final Sale on all clearance items.</p><br>
            
            <p><strong>Shipping Policy</strong></p>
           	<p>The cost of standard shipping (7-14 business days) depends on the cost of your order.</p>
            <p>One day shipping is a minimum of $20 dollars. Priority Shipping (2-3 business days) is a minimum of $15 dollars.</p>
            <p>We occasionally have promotions where shipping is free on orders over $50.</p>
           	<p>Orders are shipped on business days only. Business days are from Monday to Friday, excluding holidays.</p>
            <p>We only ship to the US.</p>
            <p>If you have any questions relating to these policies or any of your questions were not answered, please email Wednesday@gmail.com.</p><br><br>
           
            
            <p><strong>RETURN/SHIPPING ADDRESS</strong></p>
            <p>Wednesday</p>
            <p>4000 Central Florida Blvd</p>
            <p>Orlando, FL 32816</p><br><br>
            
            
      	   
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