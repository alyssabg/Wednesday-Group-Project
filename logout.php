<?php 
//start session
session_start();

//End the Session
session_destroy();

mysqli_close($con);
header("Location: login.php");
exit();
?>