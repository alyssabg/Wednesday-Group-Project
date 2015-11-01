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
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="table table-hover">
            	<div class="row">
                	<div class="col-sm-12 col-md-12">
                    <h1 style="text-align:center;">Review Your Order</h1>
                    </div>
                </div>
                <div class="carttitles">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h4 class="col-sm-1 col-lg-3 col-md-12" style="text-align:center;">Product</h4>
                        <h4 class="col-sm-1 col-lg-3 col-md-12" style="text-align:center;">Price</h4>
                        <h4 class="col-sm-1 col-lg-3 col-md-12" style="text-align:center;">Quantity</h4>
                        <h4 class="col-sm-1 col-lg-3 col-md-12" style="text-align:center;">Total</h4>
                   </div>
                </div>
                </div>
                <hr>
            
                        <div class="col-sm-1 col-lg-3 col-md-12">
                        	<div class="media">
                            <div class="cartmobile">
                            <h4 style="text-align:center;">Product</h4>
                            <br>
                            </div>
                            <h4 class="media-heading"><a href="#">Product name</a></h4>
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                          
                        	</div>
                        </div>
                        <div class="cartmobile">
                            <h4 style="text-align:center;">Price</h4>
                            <br>
                         </div>
                        <div class="col-sm-1 col-lg-3 col-md-12 text-center"><strong>$4.87</strong></div>
                        <div class="cartmobile">
                            <h4 style="text-align:center;">Quantity</h4>
                            <br>
                         </div>
                        <div class="col-sm-1 col-lg-3 col-md-12" style="text-align: center">
                        <input type="text" size="2" value="3">
                        </div>
                         <div class="cartmobile">
                            <h4 style="text-align:center;">Total</h4>
                            <br>
                         </div>
                        <div class="col-sm-1 col-lg-3 col-md-12 text-center"><strong>$14.61</strong></div>
                      
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                 <hr>
                    <div class="row">
                    	<div class="col-sm-12 col-md-12 ">
                      			<div class="col-md-6 text-left"><h5>Subtotal</h5></div>
                        		<div class="col-md-6 text-right"><h5><strong>$14.61</strong></h5></div>
                        </div>
                    </div>
                 <hr>
                    <div class="row">
                    	<div class="col-sm-12 col-md-12 ">
                       		<div class="col-md-6 text-left"><h5>Estimated shipping</h5></div>
                        	<div class="col-md-6 text-right"><h5><strong>$6.94</strong></h5></div>
                        </div>
                    </div>
                 <hr>
                    <div class="row">
                    	<div class="col-sm-12 col-md-12 ">
                    		<div class="col-md-6 text-left"><h3>Total</h3></div>
                        	<div class="col-md-6 text-right"><h3><strong>$21.55</strong></h3></div>
                   
                    	</div>
                    </div>
                 
                    <div class="row">
                    	<div class="col-sm-12 col-md-12 pull-right">
                      
                      	  <button type="button" onclick="showPay()" class="btn btn-success pull-right">
                            Checkout <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <button type="button" class="btn btn-default pull-right">
                            <span class="glyphicon glyphicon-tag"></span> <a href="catalog.php">Continue Shopping</a>
                        </button>
             
                  
                    </div>
                    </div>
            
            </div>
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