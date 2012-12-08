<?php
	//echo "<pre>";print_r($_POST);exit;
	$sql="SELECT name,DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dob)), '%Y')+0 AS age,lastdonat,area,howoften,gender,mobile,email FROM user where blood_group=".$_POST['BloodGroup']." AND state=".$_POST['statelist']." AND city=".$_POST['distlist'];
	$db_sql=@mysql_query($sql);	
	$data = array();
	while($row = @mysql_fetch_array($db_sql)){
		$data[]=$row;
	}	
	//echo "<pre>";print_r($data);exit;
?>
<div class="userinfobox">
	<div class="userinfobox_head">
        <div class="index">No.</div>
        <div class="name">Name</div>
        <div class="gender">Gender</div>
        <div class="age">Age</div>
        <div class="location">Location</div>        
        <div class="ldd">Last Donated</div>
		<div class="mobile">Mobile</div>
        <div class="email">E-mail</div>
    </div>
    <div class="userinfobox_body">
    <?php for($i=0;$i<count($data);$i++){ ?>
        <div class="index"><?php echo $i; ?></div>
        <div class="name"><?php echo $data[$i]['name']; ?></div>
        <div class="gender"><?php echo $data[$i]['gender']=='M' ? 'Male' : 'Female'; ?></div>
        <div class="age"><?php echo $data[$i]['age']; ?></div>
        <div class="location"><?php echo $data[$i]['area']; ?></div>        
        <div class="ldd"><?php echo date("Y-m-d",strtotime($data[$i]['lastdonat'])); ?></div>
		<div class="mobile"><?php echo $data[$i]['mobile']; ?></div>
        <div class="email"><?php echo $data[$i]['email']; ?></div>
    <?php } ?>
    </div>
</div>