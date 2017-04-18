$(document).ready(function() {
    $('#loginform').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok has-success',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    }
                }
            }
            
            
        }
    });
    $( "#btn-guest" ).click(function() {
  window.location.href = 'index.php/guest';
});    
});

function login(){
    var email = document.forms["logForm"]["email"].value;
    var password = document.forms["logForm"]["password"].value;
    var user = {
        "email" : email,
        "password": password
    };

    //alert(email);
    $.post("index.php/login", user, function(res){
        if(res.loginstatus){
            swal({
				title: "success",
				text: "Login confirmed",
				type: "success",
				showCancelButton: false,
				confirmButtonText: "Ok",   
				closeOnConfirm: false
        },
		function(){
			window.location.href = 'templates/projects.php';
		});
    }
	else{
		swal("Incorrect Login", "Try Again", "error")
	}
	},"json");
    return false;
}