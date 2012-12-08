<?php
/* Created By   : Kalpesh Thakkar
 * Created Date : 27-Nov-2012
 */ 	
	$host="127.0.0.1";
	$username="root";
	$password="";
	$dbname="bloodbank";


	$link = mysql_connect($host, $username, $password);
	$dbconnect=mysql_select_db($dbname,$link) or mysql_error("Error while creating the database");
?>