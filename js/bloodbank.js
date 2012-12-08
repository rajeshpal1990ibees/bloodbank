$(document).ready(function(){	
	$("#statelist").change(function(){
		var state_id=$("#statelist").val();
		$("#distlist").empty();
		var geturl="ajax/getcities.php?state_id="+state_id;
		var unread;
		$.ajax({
			type:"POST",
			url:geturl,   					
			data:"",
			dataType:"html",
			cache: false,
			success:function(response){
				//alert(response);
				$("#distlist").append(response);
			},
			error:function(XMLHttpRequest, textStatus, errorThrown){
			}
		});
	});
		
	$( "#dob_datepicker" ).datepicker({
		/*defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 3,
		onClose: function( selectedDate ) {
			$( "#to" ).datepicker( "option", "minDate", selectedDate );
		}*/
		dateFormat: 'yy-mm-dd'
	});
	$( "#lastdonat_datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
	
});