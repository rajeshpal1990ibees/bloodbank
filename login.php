<?php
		
?>
<div class="register_box">
	<form method="post" action="" name="register">
		<fieldset>
			Name<input type="text" class="textbox" name="name" id="name">
		</fieldset>
		<fieldset>
			User Name<input type="text" class="textbox" name="username" id="username">
		</fieldset>
		<fieldset>
			Password<input type="text" class="textbox" name="password" id="password">
		</fieldset>
		<fieldset>
			Confirm Password<input type="text" class="textbox" name="confirmpassword" id="confirmpassword">
		</fieldset>
		<fieldset>
			Date of Birth<input type="text" class="textbox" name="dob" id="dob_datepicker">
		</fieldset>
		<fieldset>
			Gender
			<select name="gender" id="gender" class="">
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="O">Other</option>
			</select>			
		</fieldset>
		
		<fieldset>
			<label>Blood Group</label>
			<?php $GenFun->blood_group_dropdown(); ?>
		</fieldset>
		<fieldset>
			Weight<input type="text" class="textbox" name="weight" id="weight">
		</fieldset>
		<fieldset>
			Mobile<input type="text" class="textbox" name="mobile" id="mobile">
		</fieldset>
		<fieldset>
			E-mail<input type="text" class="textbox" name="email" id="email">
		</fieldset>
		<fieldset>
			Date of last blood donation<input type="text" class="textbox" name="lastdonat" id="lastdonat_datepicker">
		</fieldset>
		
		<fieldset>
			<label>Select State</label>					
			<?php $GenFun->state_dropdown(); ?>			
		</fieldset>
		<fieldset>
			<label>Select City</label>
			<select class="finddistlistmenu" id="distlist" name="distlist">
				<option value="Select">-----Select-----</option>
			</select>
		</fieldset>	
		<fieldset>
			Area<input type="text" class="textbox" name="area" id="area">
		</fieldset>
		<fieldset>
			How often have you donated blood in the past?
			<select name="howoften" id="howoften" class="">
				<option value="yet_to_donate">Yet to donate</option>
				<option value="regular_donor">Regular donor</option>
				<option value="need_basis">On need basis</option>
			</select>
		</fieldset>
		
		<input type="submit" class="" name="Save" id="Save" value="Save">
	</form>
</div>