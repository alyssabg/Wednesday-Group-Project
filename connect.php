<?php

/* Database config */

$db_host		= 'sulley.cah.ucf.edu';
$db_user		= 'ka578143';
$db_pass		= 'DancinG#93';
$db_database		= 'ka578143'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>