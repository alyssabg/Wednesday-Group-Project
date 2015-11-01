<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wednesday Tax</title>

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
               <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
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
      
       <h1>Tax Policy</h1><br>
       	
        <p>Taxes that appear in your order confirmation are estimated. The actual taxes charged to you will be calculated based on the state and local sales taxes when your order is shipped.</p>

		<p>The terms contained are subject to change as the taxation of online transactions is continually changing.</p><br>

		<p><strong>States Where Wednesday Collects Sales Taxes</strong></p>
		<p>Orders shipped to the any state with state or local taxes will have all applicable local and state sales taxes added to your total order, and to your shipping charges where appropriate.</p><br>

		<p><strong>States Where Nordstrom Does Not Collect Sales Taxes</strong></p>
		<p>Wednesday does not collect sales or use taxes in all states. For states imposing sales or use taxes, your purchase may be subject to use tax unless it is specifically exempt from taxation. Your purchase is not exempt merely because it is made over the Internet or by other remote means. Many states require purchasers to file a sales/use tax return at the end of the year reporting all of the taxable purchases that were not taxed and to pay tax on those purchases.</p>

		<p>You may have a tax obligation in states where Wednesday does not collect sales tax. Details of how to report these taxes may be found at the websites of your respective taxing authorities.</p>
        
        <p>If you have any questions relating to this policy or any of your questions were not answered, please email Wednesday@gmail.com.</p><br><br>
 
        
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