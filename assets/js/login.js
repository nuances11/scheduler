$(function() {
	$('#user_login').submit(function(e){
		e.preventDefault();
		var formData = $(this);
		var base_url = $(this).data('url');

		$.ajax({
			type: "POST",
		  	url: base_url + "validate_login",
		  	data: formData.serialize(),
		  	dataType: "JSON",
		  	success: function(data){
		  		console.log(data);
				if (!data.success) {
                    $('#err').html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' + data.errors + '</div>');
                }else{
					if (!data.invalid_login) {
                        if (data.userType == 'Admin') {
                            window.location.href = base_url + 'admin';
                        } else if (data.userType == 'Teacher') {
                            window.location.href = base_url + 'user';
                        }else if (data.userType == 'Principal') {
                            window.location.href = base_url + 'principal';
                        } else {
                            alert('Invalid user type!');
                            window.location.href = base_url + 'login';
                        }
                    } else {
                        window.location.href = base_url + 'login';
                    }
				}
			}
		});
	})


})
