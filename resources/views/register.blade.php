
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register BanME</title>
    <!--=====================================================================================-->
    <link rel="icon" type="image/png" href="assets/images/icons/doctor.png"/>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="assetad/css/style.css"/>
</head>
<body class="form-v2">
	<div class="page-content">
		<div class="form-v2-content">
			<form class="form-detail" action="#" method="post" id="myform" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
                <h2>Registration </h2>
				<div class="form-row">
					<label for="full-name">User Name:</label>
					<input type="text" name="full_name" id="inputName" class="input-text" placeholder="user Name">
				</div>
				<div class="form-row">
					<label for="your_email">Your Email:</label>
					<input type="text" name="your_email" id="inputEmail" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
				</div>
				<div class="form-row">
					<label for="comfirm-password">Confirm Password:</label>
					<input type="password" name="confirm_password" id="confirm_password" class="input-text" placeholder="Confirm Password" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
		    	password: "required",
		    	confirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		inputName: {
		  			required: "Please provide an username"
		  		},
		  		inputEmail: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		confirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>