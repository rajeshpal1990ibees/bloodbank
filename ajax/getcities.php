<?php 

/* Created By   : Kalpesh Thakkar
 * Created Date : 27-Nov-2012
*/
// start the output buffer
ob_start();
session_start();
//GENERAL SETTINGS
error_reporting(E_ALL ^ E_NOTICE);	// display all errors except notices
@ini_set('display_errors', '1');	// display all errors
@ini_set('register_globals', 'Off');	// make globals off runtime
@ini_set('short_open_tag','On');

include("../settings/db_settings.php");		//database connection configuration

$sql="SELECT `city_name`, `city_id` FROM tblcitylist where state_id=".$_GET['state_id'];
$db_sql=@mysql_query($sql);			
$group_name_arr=array();
$asset_group_id_arr=array();
while($row=@mysql_fetch_array($db_sql)){			
	$group_name_arr[]		=	$row['city_name'];
	$group_id_arr[]	=	$row['city_id'];
}
//echo "<pre>";print_r($group_name_arr);
//echo $sql;
$html='';
for($i=0;$cnt=count($group_name_arr),$i<$cnt;$i++){
	if($group_id_arr[$i]==0){
		$html.="<option selected value=\"". $group_id_arr[$i] ."\">$group_name_arr[$i]</option>";
	}else{
		$html.="<option value=\"". $group_id_arr[$i] ."\">$group_name_arr[$i]</option>";
	}
}
echo $html;
?>