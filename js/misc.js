$(function(){

	$("#cpass").on('change', function(e)
	{
		e.preventDefault();
		var cpass = $(this).val();
		var pass = $("#pass").val();
		if(pass != cpass){
			$(this).val("");
			$("cpasserr").html("<span class= 'alert alert-danger'> Password do not match</span>");

		}
		else{
			$("#cpasserr").html("<span class= 'alert alert-danger'> Password match</span>");
		}

	});

	$("#pass").on('change', function(e){
		e.preventDefault();
		$("#cpass").val("");
	});

	$('#user').on('keyup',function (e){
		var user = $(this).val();
		var dataString = 'user=' + user;

		$.ajax({
			type: 'POST',
			url: 'checkuser.php',
			data: dataString ,
			cache: false,
			success: function(available){
				if(available == "false"){
					$('#usererr').html('<span class="alert alert-danger">Username not available</span>');
				}
				else{
					$('#usererr').html('<span class="alert alert-success">Username available</span>');
				}
			},
			error: function(xhr){
				$('#usererr').html('<span class="alert alert-danger">Some Error Occurred:' + xhr.status +'</span>');
			}
		});

	});

});