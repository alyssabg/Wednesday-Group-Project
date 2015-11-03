<?php
$con = mysql_connect("sulley.cah.ucf.edu","ka578143","DancinG#93");
if (!$con) {
	die("Can not Connect: " . mysql_error());
}
mysql_select_db("ka578143",$con);

$id = $_GET['id'];

$sql = "SELECT * FROM wednesday WHERE productID = $id";
$prodCat = $row['category'];
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

    <title>Wednesday Catalog Item</title>
    
        <style>
			@import url('css/bootstrap.css');
			@import url('css/bootstrap.min.css');
			@import url('css/shop-homepage-detail.css');
			@import url('css/full-width-pics.css');
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
                <!--<i class="fa fa-search"></i>-->
               <!-- <a class="navbar-brand" href="#">Start Bootstrap</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="logo">
            <div class="col-lg-4"><a href="home.php"><img src="img/wednesday_logo1.png" alt="Wednesday"></a></div>
            </div>
            <div class="col-lg-8">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php">Home</a>
                        	
                    </li>
                    <li>
                        <a href="womenscatalog.php">Women</a>
                    </li>
                    <li>
                        <a href="menscatalog.php">Men</a>
                    </li>
                    <li>
                        <a href="#">About</a>
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
                    <img src="'.$row['productImage'].'" alt="'.$row['productName'].'">
					</div>
					<div class="col-md-5">
                    <div class="caption-full">  
                        <h2>'.$row['productName'].'</h2>
                        <hr>
                        <h1>'.$row['price'].'</h1>
                       <h3>'.$row['description'].'</h3>
                       <h4 class="pull-left">Stock: '.$row['stock'].'</h4>
                       <h4 class="pull-right">Weight: '.$row['weight'].'</h4>
                       
                       <br><br><br><hr>
					   <a class="btn btn-default">S</a>
					   <a class="btn btn-default">M</a>
					   <a class="btn btn-default">L</a>

					   <a href="cart.php" class="btn btn-default pull-right">Add To Cart</a>
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



                <div class="container">
                    <h1 style="text-align:center;">Recommendations</h1>
                    <?php
                        $con = mysql_connect("sulley.cah.ucf.edu","ka578143","DancinG#93");
                        if (!$con) {
                            die("Can not Connect: " . mysql_error());
                        }
                        mysql_select_db("ka578143",$con);

                        $id = $_GET['id'];

                        $sql = "SELECT * FROM wednesday WHERE productID= 759 || productID=174 || productID=332";
                     
                              $myData = mysql_query($sql,$con);
                        ?>


                    
                    <?php
                    while ($row = mysql_fetch_array($myData))  
                    echo'
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="product_details.php?id='.$row['productID'].'"><img src="'.$row['productThumb'].'" alt="'.$row['productThumb'].'"></a>
                            <div class="caption">
                                <h2 class="pull-right" style="color:#d824c9;">'.$row['price'].'</h2>
                                <h2><a href="product_details.php?id='.$row['productID'].'">'.$row['productName'].'</a>
                                </h2>
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

                <div class="well">

                    <div class="text-right">
                        <button type="button" onclick="showReview()" class="btn btn-success pull-right">
                            Leave a Review<span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <br>
                    </div>

                        <div class="container" id="review" style="visibility:hidden;">
                            <?php
                                // define variables and set to empty values
                                $firstName = $lastName = $review = "";

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                   $firstName = test_input($_POST["firstName"]);
                                   $lastName = test_input($_POST["lastName"]);
                                   $review = test_input($_POST["review"]);
                                }

                                function test_input($data) {
                                   $data = trim($data);
                                   $data = stripslashes($data);
                                   $data = htmlspecialchars($data);
                                   return $data;
                                }
                                $t=time();
                            ?>

   
                            <div class="row">
                                <div class="col-md-12 col-md-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Why are you so obsessed with me?
                                            </h3>
                                        </div>
                                       
                                        <div class="panel-body1">
                                        
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                        
                                            <div class="row">
                                                <div class="col-xs-6 col-md-6 pull-right">
                                                    <div class="form-group">
                                                        <label for="firstName">
                                                            First Name</label>
                                                        <input type="text" class="form-control" name="firstName" id="firstName"  required />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 pull-left">
                                                    <div class="form-group">
                                                        <label for="lastName">
                                                            Last Name</label>
                                                        <input type="text" class="form-control" name="lastName" id="lastName" required />
                                                    </div>
                                                </div>
                                            </div>
                                            

                                          
                                             <div class="row">
                                                <div class="col-xs-4 col-md-4 pull-left">
                                                    <div class="form-group">
                                                        <label for="review">
                                                            Review</label>
                                                        <textarea type="text" class="form-control"  name="review" id="review" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-xs-4 col-md-4 ">
                                                    <div class="form-group">
                                                        <input type="submit" onclick="showReview()" class="btn btn-success pull-right" name="submit" value="Submit">
                                                    </span>
                                                </input>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </form>
                                        </div>
                                    </div>
                                   
                                </div>
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

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                        function saveComment($contentID){
                            $insert = array();
                            $insert['content'] = $contentID;
                            $insert['FirstName'] = strip_tags($this->registry->getObject('db')->sanitizeData($_POST['firstName']));
                            $insert['LastName'] = $this->registry->getObject('db')->sanitizeData($_POST['lastName']);
                            $insert['ReviewComment'] = strip_tags($this->registry->getObject('db')->sanitizeData($_POST['review']));
                            $insert['IPAddress'] = $_SERVER['REMOTE_ADDR'];
                            $valid = true;
                            if( $_POST['firstName'] == '' ||
                                $_POST['lastName'] == '' ||
                                $_POST['review'] == ''){
                                    $valid = false;
                                }
                        

                        if($valid == true){
                            $this->registry->getObject('db')->insertRecords('firstName',$insert);
                            $this->registry->getObject('template')->getPage()->addTag('message_heading', 'Review added');
                            $this->registry->getObject('template')->getPage()->addTag('message_heading', 'Your review has been added');
                            $this->registry->getObject('template')->buildFromTemplates('header.tpl.php', 'message.tpl.php', 'footer.tpl.php');
                        }
                        else{
                            $this->registry->getObject('template')->getPage()->addTag('message_heading', 'Error');
                            $this->registry->getObject('template')->getPage()->addTag('message_heading', 'Either your name or review was empty, please try again');
                            $this->registry->getObject('template')->buildFromTemplates('header.tpl.php', 'message.tpl.php', 'footer.tpl.php');
                        }
                    }
        
                    ?>
                            <?php
                                echo $firstName;
                                echo "&nbsp;";
                                echo $lastName;
                            ?>

                            <span class="pull-right">
                                <?php
                                    echo "<span class'pull-right'>";
                                    echo(date("m-d-Y",$t));
                                    echo "</span>";
                                ?>
                            </span>

                            <?php
                                echo "<br>";
                                echo $review;
                                echo "<br>";
                            ?>

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
            <?php
				mysql_close($con);
			?>

            <script>
    function showReview() {
        document.getElementById("review").style.visibility = "visible";
    }

   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
