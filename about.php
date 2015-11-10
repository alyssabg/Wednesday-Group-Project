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
         <div class="col-md-6">
          
          <img class="img-responsive img-center" src="img/mean.jpg" alt="mean">
         
      </div>
        
      <div class="col-md-6">
      
      	  <h1>About Wednesday</h1>
            
          	<p>Wedenesday is an online store started up on August 2015 in Orlando, Fl.</p>
            <p>Our store is inspired by the very popular movie <i>Mean Girls</i>. Everything in our store is pink, this comes from the quote "On Wednesday we wear pink!" spoken by Karen, one of the plastics in the movie.</p>
            <p>We offer both men and women clothing, shoes, purses, and wallets and we keep up with all the latest trends in the fashion world.</p>
            <p>It is our goal to make sure everyones visit to Wednesday.com is a fun and easy experience, so that customers will want to visit our site again and again in the future.</p><br>
            
            <p><strong>Our Team</strong></p>
            <p>Emily Frazin</p>
            <p>Alyssa Gagnon</p>
            <p>Logan Lavigne</p>
            <p>Kaitlyn Lunceford</p>
            <p>Barbara Payne</p>
            <p>Stephanie Quirindongo</p><br>
            
            <p>View our policies by clicking on the links below:</p>
            <p><strong><a href="tax.php">Tax Policy</a></strong></p>
        	<p><strong><a href="return.php">Return and Shipping Policy</a></strong></p>
    		<p><strong><a href="privacy.php">Privacy Policy and Security Statement</a></strong></p>

        </br>
        </br>

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