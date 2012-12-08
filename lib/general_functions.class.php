<?php
/* Created By 	: Suryakant Maurya
 * Created Date : 16-DEC-2009
 * File Name    : GeneralFunction.php
 * Description	: All General functions used to whole project made here.
 */


class GeneralFunction
{
	function blood_group_dropdown($bloodid=''){
		$sql=" SELECT `name`,`id` FROM blood_group";
		$db_sql=@mysql_query($sql);			
		$group_name_arr=array();
		$group_id_arr=array();
		
		while($row=@mysql_fetch_array($db_sql)){			
			$group_name_arr[]	=	$row['name'];
			$group_id_arr[]		=	$row['id'];
		}
		$html='<select class="findbloodlistmenu" id="BloodGroup" name="BloodGroup">';
		$html .='<option value="Select">-----Select-----</option>';
		for($i=0;$cnt=count($group_name_arr),$i<$cnt;$i++){
			if($group_id_arr[$i]==$bloodid){
				$html.="<option selected value=\"". $group_id_arr[$i] ."\">$group_name_arr[$i]</option>";
			}else{
				$html.="<option value=\"". $group_id_arr[$i] ."\">$group_name_arr[$i]</option>";
			}
		}
		$html .= '</select>';
		echo $html;			
	}
	
	function state_dropdown($stateid=''){
		$sql1=" SELECT `state`, `city_id` FROM tblcitylist GROUP BY state ORDER BY `city_id`";
		$db_sql1=@mysql_query($sql1);			
		$state_name_arr=array();
		$state_id_arr=array();
		while($row=@mysql_fetch_array($db_sql1)){			
			$state_name_arr[]	=	$row['state'];
			$state_id_arr[]		=	$row['city_id'];
		}
		
		$html='<select class="findstatelistmenu" id="statelist" name="statelist">';
		$html .='<option value="Select">-----Select-----</option>';
		for($i=0;$cnt=count($state_name_arr),$i<$cnt;$i++){
			if($state_id_arr[$i]==$stateid){
				$html.="<option selected value=\"". $state_id_arr[$i] ."\">$state_name_arr[$i]</option>";
			}else{
				$html.="<option value=\"". $state_id_arr[$i] ."\">$state_name_arr[$i]</option>";
			}
		}
		$html .= '</select>';
		echo $html;			
	}
}
?>
