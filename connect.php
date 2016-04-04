	<?php
	
	session_start(); 
$host="localhost";
$username="root";
$password="";
$database="song";
$connect=mysql_connect($host,$username,$password);
mysql_select_db($database,$connect) or die("Sorry for you inconivinve");



?>
