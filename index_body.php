<?php 		
	
	
	
?>	
<div class="search_box">
	<form method="post" action="?p=find" name="register">
		<fieldset>
			<label>Blood Group</label>
			<?php $GenFun->blood_group_dropdown(); ?>
		</fieldset>
		<fieldset>
			<label>Select State</label>					
			<?php $GenFun->state_dropdown(); ?>
			</select>
		</fieldset>
		<fieldset>
			<label>Select City</label>
			<select class="finddistlistmenu" id="distlist" name="distlist">
				<option value="Select">-----Select-----</option>
			</select>
		</fieldset>	      
		<input type="submit" class="" name="Save" id="Save" value="Save">
	</form>
</div>
	