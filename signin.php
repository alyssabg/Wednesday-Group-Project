<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">



<title>Wednesday Cart - Alyssa Gagnon</title>

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
                        <a href="catalog.php">Women</a>
                    </li>
                    <li>
                        <a href="catalog.php">Men</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
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
           
           <!-- <a href="#"><img src="img/shoppingbag.png"></a>-->
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
            <div class="col-md-6">
                <div class="area">
                    <form class="form-horizontal">
                        <div class="heading">
                            <h4 class="form-heading">Sign In</h4>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputCompanyName">Company Name</label>

                            <div class="controls">
                                <input id="inputCompanyName" placeholder=
                                "E.g. Some Software Pvt. Ltd." type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputUsername">Username</label>

                            <div class="controls">
                                <input id="inputUsername" placeholder=
                                "E.g. ashwinhegde" type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputPassword">Password</label>

                            <div class="controls">
                                <input id="inputPassword" placeholder=
                                "Min. 8 Characters" type="password">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox"><input type="checkbox">
                                Keep me signed in ¦ <a class="btn btn-link"
                                href="#">Forgot my password</a></label>
                                <button class="btn btn-success" type=
                                "submit">Sign In</button> <button class="btn"
                                type="button">Help</button>
                            </div>
                        </div>

                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert" type=
                            "button">×</button> <strong>Access Denied!</strong>
                            Please provide valid authorization.
                        </div>
                    </form>
                    <p>Sign in not functional yet, please view Admin and Client page below</p>
                     <a href="admin.php" class="btn btn-default">View Admin Page</a>
                    </div>
                    <a href="client.php" class="btn btn-default">View Client Page</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="area">
                    <form class="form-horizontal">
                        <div class="heading">
                            <h4 class="form-heading">Sign Up</h4>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputCompanyName">Company Name</label>

                            <div class="controls">
                                <input id="inputCompanyName" placeholder=
                                "E.g. Some Software Pvt. Ltd." type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputFirst">First
                            Name</label>

                            <div class="controls">
                                <input id="inputFirst" placeholder=
                                "E.g. Ashwin" type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputLast">Last
                            Name</label>

                            <div class="controls">
                                <input id="inputLast" placeholder="E.g. Hegde"
                                type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputEmail">Email</label>

                            <div class="controls">
                                <input id="inputEmail" placeholder=
                                "E.g. ashwinh@cybage.com" type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputUser">Username</label>

                            <div class="controls">
                                <input id="inputUser" placeholder=
                                "E.g. ashwinhegde" type="text">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for=
                            "inputPassword">Password</label>

                            <div class="controls">
                                <input id="inputPassword" placeholder=
                                "Min. 8 Characters" type="password">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox"><input type="checkbox">
                                I agree all your <a href="#">Terms of
                                Services</a></label> <button class=
                                "btn btn-success" type="submit">Sign
                                Up</button> <button class="btn" type=
                                "button">Help</button>
                            </div>
                        </div>

                        <div class="alert alert-info">
                            <button class="close" data-dismiss="alert" type=
                            "button">×</button> <strong>Confirmation:</strong>
                            A confirmation email has been sent to your
                            email.<br>
                            Thank you for your registration.
                        </div>
                    </form>
                    
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
                    <p>designed by Alyssa Gagnon</p>
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
		
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>