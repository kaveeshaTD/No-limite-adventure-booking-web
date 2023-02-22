$(document).ready(function(){
	/* handling form validation */
   
	$("#signUp-form").validate({
		submitHandler: signUp
	});

	$("#reset-form").validate({
		submitHandler: resetPw
	});

	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			username: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "Please enter your password"
			 },
			username: "Please enter your email address",
		},
		submitHandler: submitForm	
	});	

	$("#booking-form").validate({
		submitHandler: submitBook
	});

	$("#contact-form").validate({
		submitHandler: submitMessage
	});

	$("#payment-form").validate({
		submitHandler: submitPayment
	});

	$("#booking-confirm").click(function(e) {
		e.preventDefault();
		var driver = $("#driver").val();
		var guide = $("#guide").val();
		var vehicle = $("#vehicle").val();
		var id = $("#booking-confirm").val();
		var data = "driver=" +driver+ "&guide="+guide+ "&vehicle="+vehicle+ "&id="+id ;
		console.log(data)
		$.ajax({				
			type : 'GET',
			url  : '../response.php?action=confirm',
			data : data,
			
			success : function(response){			
				if($.trim(response) === "1"){
					$("#booking-confirm").html('Confirming ...');
					setTimeout(' window.location.href = "newBookings.php"; ',2000);
				} else {			
					$("#booking-confirm").html('error');
					setTimeout(2000);
				}
			}
		});
		return false;
	});


	/* Handling SignUp functionality */

	function signUp() {		
		var password = $("#password").val();
        var confirmPassword = $("#c_password").val();
		if (password != confirmPassword)
		$("#error").fadeIn(1000, function(){						
			$("#error").html("Passwords didn't match!").show();
		});
		else
			var data = $("#signUp-form").serialize();
			$.ajax({				
				type : 'POST',
				url  : 'response.php?action=signUp',
				data : data,
				beforeSend: function(){	
					$("#error").fadeOut();
					$("#signUp_submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success : function(response){			
					if($.trim(response) === "1"){
						$("#signUp-submit").html('Loading ...');
						setTimeout(' window.location.href = "success.php?register=success"; ',2000);
					} else {									
						$("#error").fadeIn(1000, function(){						
							$("#error").html(response).show();
						});
					}
				}
			});
		return false;
	}

	function resetPw() {		
		var password = $("#password").val();
        var confirmPassword = $("#c_password").val();
		if (password != confirmPassword)
		$("#error").fadeIn(1000, function(){						
			$("#error").html("Passwords didn't match!").show();
		});
		else
			var data = $("#reset-form").serialize();
			$.ajax({				
				type : 'POST',
				url  : 'response.php?action=reset',
				data : data,
				beforeSend: function(){	
					$("#error").fadeOut();
					$("#reset_submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success : function(response){			
					if($.trim(response) === "1"){
						$("#reset-submit").html('Loading ...');
						setTimeout(' window.location.href = "success.php?reset-password=success"; ',2000);
					} else {									
						$("#error").fadeIn(1000, function(){						
							$("#error").html(response).show();
						});
					}
				}
			});
		return false;
	}

	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=login',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "1"){
					$("#login-submit").html('Signing In ...');
					setTimeout(' window.location.href = "index.php"; ',2000);
				}
				
				else {
					if($.trim(response) === "2"){
						$("#login-submit").html('Signing In ...');
						setTimeout(' window.location.href = "admin/admindashboard.php"; ',2000);
					}else{									
					$("#error").fadeIn(1000, function(){						
						$("#error").html(response).show();
					});
				}
				}
			}
		});
		return false;
	}

	/* Handling Booking functionality */
	function submitBook() {		
		var data = $("#booking-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=booking',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#booking_submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "1"){
					$("#booking-submit").html('Processing ...');
					setTimeout(' window.location.href = "payment.php"; ',2000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html(response).show();
					});
				}
			}
		});
		return false;
	}

	/* Handling Contact functionality */
	function submitMessage() {		
		var data = $("#contact-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=contact',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#contact_submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "1"){
					$("#contact-submit").html('Sending ...');
					setTimeout(' window.location.href = "success.php?contact=success"; ',2000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html(response).show();
					});
				}
			}
		});
		return false;
	}

	function submitPayment(){
		window.location.href = 'success.php?payment=success';
	}

	/* Handling logout functionality */
function logout() {
	$.ajax({				
		type : 'POST',
		url  : 'response.php?action=logout',
		data : data,
		success : function(response){
			window.location.href = "index.php";
		}
	});
	return false;
}   
});