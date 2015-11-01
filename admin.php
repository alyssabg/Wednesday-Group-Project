<?php
$con = mysql_connect("sulley.cah.ucf.edu","al461752","Bentley93!");
if (!$con) {
die("Can not Connect: " . mysql_error());
}
mysql_select_db("al461752",$con);

$sql = 'SELECT * FROM Products';
$myData = mysql_query($sql,$con);
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Wednesday Admin</title>
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
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h1 style="text-align:center;">Welcome Admin</h1>
    </div>
    </div>
    </div>
    
    <div class="container">
    	<div class="row">
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Status</h3>
						<div class="pull-right">
						
						</div>
					</div>
					    <div class="row">
                      	<div class="col-md-10">
                        	<h4><strong>Total Sales:</strong></h4>
                        </div>
                        <div class="col-md-2">
                        	<h4>32</h4>
                        </div>
                      </div>
					  <div class="row">
                      	<div class="col-md-10">
                        	<h4><strong>New Orders Placed:</strong></h4>
                        </div>
                        <div class="col-md-2">
                        	<h4>5</h4>
                        </div>
                      </div>
                        <div class="row">
                      	<div class="col-md-10">
                        	<h4><strong>New Payment Recieved:</strong></h4>
                        </div>
                        <div class="col-md-2">
                        	<h4>5</h4>
                        </div>
                      </div>
                        <div class="row">
                      	<div class="col-md-10">
                        	<h4><strong>New Reviews/Comments:</strong></h4>
                        </div>
                        <div class="col-md-2">
                        	<h4>2</h4>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
				</div>
			</div>
	
    
   <!-- <div class="container">
    
   
    	<div class="row">-->
			
			<div class="col-md-8">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Revenue</h3>
						<div class="pull-right">
						
						</div>
					</div>
					
					<img src="img/chart.png" class="img-responsive img-center roundcorners" alt="chart">
				</div>
			</div>
		</div>
	</div>
    	
   <div class="container">
    <!--<h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1>-->
    	<div class="row">
			
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Add Product</h3>
						<div class="pull-right">
							<!--<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>-->
						</div>
					</div>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
					</div>-->
                    <div class="row">
                    <div class="col-md-4">
					<div class="form-group">
                                <label for="ProductID">
                                    Product Id</label>
                                <input type="text" class="form-control" id="ProductID"  required />
                            </div>
                           </div>
                          
                   
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="ProductName">
                                    Product Name</label>
                                <input type="text" class="form-control" id="ProductName"  required />
                            </div>
                           </div>
                         
                    
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="Description">
                                    Description</label>
                                <input type="text" class="form-control" id="Description"  required />
                            </div>
                         </div>
                         </div>
                         <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="Category">
                                    Category</label>
                                <input type="text" class="form-control" id="Category"  required />
                            </div>
                            </div>
                            
                            
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="SKU">
                                    SKU</label>
                                <input type="text" class="form-control" id="SKU"  required />
                            </div>
                            </div>
                           
                           
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="Stock">
                                    Stock</label>
                                <input type="text" class="form-control" id="Stock"  required />
                            </div>
                            </div>
                            </div>
                            <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                                <label for="Cost">
                                    Cost</label>
                                <input type="text" class="form-control" id="Cost"  required />
                            </div>
                            </div>
                          <div class="col-md-4">  
                    <div class="form-group">
                                <label for="Price">
                                    Price</label>
                                <input type="text" class="form-control" id="Price"  required />
                            </div>
                            </div>
                            <div class="col-md-4">
                    <div class="form-group">
                                <label for="ImageURL">
                                    Image URL</label>
                                <input type="text" class="form-control" id="ImageURL"  required />
                            </div>
                            </div>
                            </div>
                       <div class="row">
                    	<div class="col-sm-12 col-md-12 pull-right">
                      
                      	  <button type="button" class="btn btn-success pull-right">
                            Submit 
                        </button>
                        </div>
                        </div> 
                        <br>
                        <br>
				</div>
			</div>
		</div>
	</div>
   
	<div class="container">
    
    
    
    
    <!--<h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1>-->
    	<div class="row">
			
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Products</h3>
						<div class="pull-right">
							<!--<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>-->
						</div>
					</div>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
					</div>-->
                    <div class="table-responsive">
					<table class="table table-hover" id="task-table">
						<thead>
							<tr>
								<th>Product Id</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>SKU</th>
                                <th>Stock</th>
                                <th>Cost</th>
                                <th>Price</th>
                                <th>Image URL</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							while($row = mysql_fetch_array($myData)){
														echo "<tr>";
							echo "<td>" . $row['productID'] . "</td>";
							echo "<td>" . $row['productname'] . "</td>";
							echo "<td>" . $row['description'] . "</td>";
							echo "<td>" . $row['category'] . "</td>";
							echo "<td>" . $row['SKU'] . "</td>";
							echo "<td>" . $row['stock'] . "</td>";
							echo "<td>" . $row['cost'] . "</td>";
							echo "<td>" . $row['price'] . "</td>";
							echo "<td>" . $row['productimage'] . "</td>";
							echo "</tr>";
														}
							?>
						</tbody>
					</table>
                    </div>
				</div>
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
                <!--    <button type="button" class="btn btn-success pull-left">
                            <a href="admin.php" style="color:white;">Admin </a><span class="glyphicon glyphicon-user"></span>
                        </button>-->
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