<?php
$con = mysql_connect("sulley.cah.ucf.edu","al461752","Bentley93!");
if (!$con) {
	die("Can not Connect: " . mysql_error());
}
mysql_select_db("al461752",$con);

$sql = 'SELECT * FROM Products where productID=1';
$myData = mysql_query($sql,$con);
?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Wednesday Client - Alyssa Gagnon</title>

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
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           <!-- <div class="navbar-header">-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
               <!-- <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-lg-4"><img src="img/wednesday_logo1.png" alt=""></div>
            <div class="col-lg-8">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="home.php">Home</a>
                        	
                    </li>
                    <li>
                        <a href="catalog.php">Women</a>
                    </li>
                    <li>
                        <a href="catalog.php">Men</a>
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
    
    
    <div class="container" >
    <div class="row">
    	<div class="col-md-8">
        <h1 style="text-align:center;">Your Account</h1>
        </div>
        <div class="col-md-4">
        <h1 style="text-align:center;">Today's Sale</h1>
        </div>
    </div>
      <div class="row">
     <!-- <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>-->
        <div class="col-xs-8 col-sm-8 " >
   
   
          <div class="panel panel-info" >
            <div class="panel-heading">
              <h3 class="panel-title">User Name</h3>
            </div>
            <div class="panel-body2">
              <div class="row">
        
                
               
                <div class=" col-md-12  "> 
                  <div class="table table-user-information" >
                   
                      <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Name:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>Jane Smith</h4>
                        </div>
                      </div>
                      <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Billing Address:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>246 Over There Place</h4>
                        </div>
                      </div>
                       <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>City, State, Zip:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>Orlando, FL, 32828</h4>
                        </div>
                      </div>
                       <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Email:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>jane.smith@gmail.com</h4>
                        </div>
                      </div>
                        <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Phone:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>(407) 321 - 5678</h4>
                        </div>
                      </div>
                       <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Card:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>XXXX-XXXX-XXXX-1234</h4>
                        </div>
                      </div>
                       <div class="row">
                      	<div class="col-md-6">
                        	<h4><strong>Expires:</strong></h4>
                        </div>
                        <div class="col-md-6">
                        	<h4>09/18</h4>
                        </div>
                      </div>
                      
                     
                    <span class="pull-right" style=" margin-top: 280px; margin-bottom:20px; margin-right:20px;">
                            <a href="#" style="color:white;" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i></a>
                            <!--<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                        </span>
                  </div>
                  
                 <!-- <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>-->
                </div>
              </div>
            </div>
                <!-- <div class="panel-footer">-->
                      <!--  <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>-->
                       
                    <!--</div>-->
            
          </div>
        </div>
        
        
          <div class="row">

    


					 <?php
                    while ($row = mysql_fetch_array($myData))  
                    echo'
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="'.$row['productlocation'].'">
								<img src="'.$row['productimage'].'" alt="'.$row['productname'].'">
							</a>
                            <div class="caption">
                                <h4 class="pull-right">$'.$row['price'].'</h4>
                                <h4><a href="'.$row['productlocation'].'">'.$row['productname'].'</a>
                                </h4>
                                <p>'.$row['description'].'</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    '
                    ?>



               

                </div>
        
        
        
      </div>
    </div>
    
    
    
  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>This site is not official and is an assignment for a UCF Digital Media course</p>
                    <p>designed by Alyssa Gagnon</p>
                    <button type="button" class="btn btn-success pull-left">
                            <a href="admin.php" style="color:white;">Admin </a><span class="glyphicon glyphicon-user"></span>
                        </button>
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
	
    
        <?php
mysql_close($con);
?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>