$(document).ready(function(e) {
	$('.edit').click(function(e) {
		$('.editshow').show(200);
		$('.edithide').hide(100);
    });
	
	$('.save').click(function(e) { 
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:base_url+"user/update_profile",
			data:$("#update_profile").serialize(),
			success: function(result){
				alert(result);
				 $('.editshow').hide(200);
				 $('.edithide').show(100);
			}
		});
    });
	
	$('#register').click(function(a){
		$('#register_form').submit();
	});
});