var Login = function () {

	var handleLogin = function() {
		$('.login-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "ID Number is required."
	                },
	                password: {
	                    required: "Password is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-error', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').submit();
	                }
	                return false;
	            }
	        });
	}  
    return {
        //main function to initiate the module
        init: function () {
        	
            //handleLogin();
           // handleForgetPassword();
           // handleRegister();               
        }

    };

}();

function login1(){
	if($('#username').val() == '' || $('#password').val() == '')
	{
		console.log('error ...');
	}else{
		// var username1 = $('#username').val();	
		// var password1 = $('#password').val();
		// alert(username1);
		$.ajax({
		    url: 'votersfolder/php/login1.php',
		    async: true,
		    type: 'POST',
		    crossDomain: true,
		    dataType: 'json',
		    data: {
		        username: username1,
		        password: password1
		    },
		    success: function(response) {
		    	alert("hello");
		    	var decode = response;
		    	
		    	
		    	if(decode.success == true)
		    	{
		    		// window.localStorage['votingUser'] = JSON.stringify(decode.user);
		    		// window.location.href = "voterhome.html";
		    	}
		    	else if(decode.success == false && decode.msg == 'error')
		    	{
		    		alert('Election has not yet started.');
		    	}
		    	else
		    	{
		    		alert('You have already voted.');
		    	}
		    	
		    },
		    error: function(error) {
		    	console.log('Error ...', error);
		    }
		});
	}
}

