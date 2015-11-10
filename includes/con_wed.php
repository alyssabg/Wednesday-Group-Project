<?php

//Local
/*
$connection = mysql_connect('localhost', 'root', 'root', 'lo071617');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db('lo071617');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
*/

//Sulley

$connection = mysql_connect('sulley.cah.ucf.edu', 'ka578143', 'DancinG#93', 'ka578143');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}

$select_db = mysql_select_db('ka578143');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


?>