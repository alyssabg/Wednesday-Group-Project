<?php
$con = mysql_connect("sulley.cah.ucf.edu","al461752","Bentley93!");
if (!$con) {
	die("Can not Connect: " . mysql_error());
}
mysql_select_db("al461752",$con);

$sql = 'SELECT * FROM Products where productID=4';
$myData = mysql_query($sql,$con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wednesday Catalog Item - Alyssa Gagnon</title>
    
        <style>
			@import url('../css/bootstrap.css');
			@import url('../css/bootstrap.min.css');
			@import url('../css/shop-homepage.css');
			@import url('../css/full-width-pics.css');
			@import url('../css/styles.css');
			@import url(https://fonts.googleapis.com/css?family=Montserrat);
		</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
<!--    <link href="../css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="../css/business-frontpage.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- <style>
        a,p,h1,h2,h3{font-family:Arial, Helvetica, sans-serif}
    </style>-->
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
                <!--<i class="fa fa-search"></i>-->
               <!-- <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-lg-4"><img src="../img/wednesday_logo1.png" alt=""></div>
            <div class="col-lg-8">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../home.php">Home</a>
                        	
                    </li>
                    <li>
                        <a href="../catalog.php">Women</a>
                    </li>
                    <li>
                        <a href="../catalog.php">Men</a>
                    </li>
                    <li>
                        <a href="../client.php">Sign In</a>
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        	

            <div class="col-md-12">

             	 <?php
                    while ($row = mysql_fetch_array($myData))  
                    echo'
                <div class="thumbnail">
					<div class="row">
					<div class="col-md-6">
                    <img src="../'.$row['productimage'].'" alt="'.$row['productname'].'">
					</div>
					<div class="col-md-5">
                    <div class="caption-full">
                        <h1 class="pull-right">$'.$row['price'].'</h1>
                        <h1><a href="#">'.$row['productname'].'</a>
                        </h1>
                       <h3>'.$row['description'].'</h3>
					   <a class="btn btn-default">S</a>
					   <a class="btn btn-default">M</a>
					   <a class="btn btn-default">L</a>
					   <br>
					   <br>
					   <a href="../cart.php" class="btn btn-default pull-right">Add To Cart</a>
                    </div>
					<br>
					<br>
					<br>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p style="padding-left:50px;">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            5.0 stars
                        </p>
                    </div>
                </div>
				
				</div>
				</div>
				'?>
                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-default">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>This site is not official and is an assignment for a UCF Digital Media course</p>
                    <p>designed by Alyssa Gagnon</p>
                    <button type="button" class="btn btn-success pull-left">
                            <a href="../admin.php" style="color:white;">Admin </a><span class="glyphicon glyphicon-user"></span>
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

   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
