<?php

$con = mysql_connect("sulley.cah.ucf.edu","ka578143","DancinG#93");
if (!$con) {
	die("Can not Connect: " . mysql_error());
}
mysql_select_db("ka578143",$con);

$id = $_GET['id'];

$sql = "SELECT * FROM wednesday WHERE productID = $id";
$rev  = "SELECT * FROM reviews WHERE productID = $id";
$myData = mysql_query($sql,$con);
$myRev = mysql_query($rev,$con);
?>
<!--for cart-->
            <?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productBycode = $db_handle->runQuery("SELECT * FROM wednesday WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productBycode[0]["code"]=>array('productName'=>$productBycode[0]["productName"], 'code'=>$productBycode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productBycode[0]["price"], 'productImage'=>$productBycode[0]["productImage"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productBycode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productBycode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
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
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="client.php">Sign In</a>
                    </li>
                    <li>
                         <a href="cart.php"><img src="img/shoppingbag.png" alt=""></a>
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
        	

                       	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM wednesday WHERE productID = $id");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
<div class="thumbnail">
             	<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
         <div class="row">
					<div class="col-md-6">
			<div class="product-image"><img src="<?php echo $product_array[$key]["productImage"]; ?>"></div>
            		</div>
                    <div class="col-md-5">
                    	<div class="caption-full">
			<h1><div><strong><?php echo $product_array[$key]["productName"]; ?></strong></div></h1>
            <br/>
            <br/>
			<h1 class="pull-right"><div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div></h1>
            <h3><?php echo $product_array[$key]["description"]?></h3>
            <br/>
            <br/>
            <br/>
            <div class="cartmobile"><p class="pull-left">Quantity *One size fits all*</p></div>
         
			<div><input type="text" name="quantity" class="quan pull-right" value="1" size="2" /><input type="submit" value="Add to cart" class="btn btn-default pull-right" /></div>
            			</div>
            		</div>
          </div>
			</form>
            <br/>
            <div class="ratings" style="float:right; padding-bottom:20px;">
                        <div class="rw-ui-container"></div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
</div>
            	<?php
			}
	}
	?>

                <div class="well">
                    <?php

                        // Error reporting:
                        error_reporting(E_ALL^E_NOTICE);

                        include "connect.php";
                        include "comment.class.php";


                        /*
                        /   Select all the comments and populate the $comments array with objects
                        */

                        $comments = array();
                        $result = mysql_query("SELECT * FROM comments ORDER BY id DESC");

                        while($row = mysql_fetch_assoc($result))
                        {
                            $comments[] = new Comment($row);
                        }

                    ?>
                    <div id="addCommentContainer">
    <p style="color: #d824c9; font-size:30px; text-align:center; font-family: 'Montserrat', sans-serif;" >Why Are You So Obsessed With Me?</p>
    <form id="addCommentForm" method="post" action="">
        
        <div>
            <div class="col-xs-6 col-md-6 " >
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" />
                </div>
            </div>
                <div class="col-xs-6 col-md-6">
                   <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" class="form-control"  name="email" id="email" />
                </div>
            </div>
       
            
           <!-- <div style="text-align:center;">
                <div class="col-xs-6 col-md-6 pull-right" style="margin-right:165px;">
                    <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" class="form-control"  name="email" id="email" />
                </div>
            </div>
        </div>-->
            
            <div style="display: none;">
                <label for="url">Website (not required)</label>
                <input type="text" name="url" id="url" />
            </div>
            
            <label for="body">Comment Body</label>
            <textarea name="body" class="form-control" id="body" cols="20" rows="5"></textarea>
            <br>
            
            <input type="submit" style="background-color: #d824c9" value="Submit" class="btn btn-primary" id="submit"/>
        </div>
    </form>
</div>
                    
                    <div id="main">

                    <?php

/*
/   Output the comments one by one:
*/

foreach($comments as $c){
    echo $c->markup();
}

?>



</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</div>

                   



                



                </div>


            </div>

        </div>

                <div class="row">
                        <div class="col-md-12">
                            <h1 style="text-align:center;">That's so fetch</h1>
                    <?php
                    error_reporting(0);
                $con = mysql_connect("sulley.cah.ucf.edu","ka578143","DancinG#93");
                if (!$con) {
                    die("Can not Connect: " . mysql_error());
                }
                mysql_select_db("ka578143",$con);

                $sql = 'SELECT * FROM wednesday where productID=168 || productID=329 || productID=762';
                $myData = mysql_query($sql,$con);
                ?>

                <?php
                    while ($row = mysql_fetch_array($myData))  
                    echo'
                    <div class="con">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="product_details.php?id='.$row['productID'].'"><img src="'.$row['productThumb'].'" alt="'.$row['productThumb'].'"></a>
                            <div class="caption">
                                <h2 class="pull-right" style="color:#d824c9;">'.$row['price'].'</h2>
                                <h2><a href="product_details.php?id='.$row['productID'].'">'.$row['productName'].'</a>
                                </h2>
                              <p>'.$row['description'].'</p>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                    '
                    ?>
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

   </script>
    <!-- container -->

 
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<script type="text/javascript">
(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "267917",
            uid: "9bedd04bd9a0461fe3bd765a352abda9",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#B13F94"
                        },
                        "color": "#B13F94"
                    }
                },
                "size": "medium",
                "label": {
                    "background": "#F4B6DB"
                },
                "style": "heart",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    
    



</body>

</html>
