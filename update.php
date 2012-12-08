<?php
$host="127.0.0.1";
	$username="root";
	$password="";
	$dbname="bloodbank";


	$link = mysql_connect($host, $username, $password);
	$dbconnect=mysql_select_db($dbname,$link) or mysql_error("Error while creating the database");
	
	$sql="SELECT `state` FROM tblcitylist where `state_id`=0 GROUP BY state ORDER BY `city_id`";
	$db_sql=@mysql_query($sql);	
	$i=1;
	while($row = @mysql_fetch_array($db_sql)){
		//echo "<pre>";print_r($row);exit;
			$data[]=$row[state];
			$sql1="update `tblcitylist` set `state_id`=".$i." WHERE `state`='".$row[state]."' and `latitude`!=''";
			$db_sql1=@mysql_query($sql1);
			$i++;
		}
	//echo "<pre>";print_r($data);
?>