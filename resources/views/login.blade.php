<<<<<<< HEAD
<h1>
login

</h1>
=======

<!DOCTYPE html>
<html lang="en">

<head>
	<title> SRTS CRM Login </title>
	<!-- META SECTION -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- END META SECTION -->
	<!-- CSS INCLUDE -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/toastr/css/toastr.min.css">
</head>
<body>

<div class="app app-fh">
		<!-- START APP CONTAINER -->
		<div class="app-container" style="background: url(<?php echo base_url(); ?>assets/assets/images/background/bg-11.jpg) center center no-repeat fixed">
			<div class="app-login-box">
				<div class="app-login-box-user"><img src="<?php echo base_url(); ?>assets/assets/images/background/no-image.png"></div>
				<div class="app-login-box-title">
					<div class="title"> SRTS CRM </div>
					<div class="subtitle">Sign in to your account</div>
					<!-- Web tracking -->
					<input type="hidden" class="form-control" name="url_path" id="url_path" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;?>"   >
					<input type="hidden" class="form-control" name="ip_adreess" id="ip_adreess" value="<?php echo  $_SERVER['REMOTE_ADDR'];?>"   >
						<!-- end Web tracking -->
				</div>
				<div data-matomo-form data-matomo-name="myformname" class="app-login-box-container" id="loginform" >
					<form id="login_form" action="<?php echo base_url('do-login'); ?>" method="post" >
						<div class="form-group">

							<input  type="text" class="form-control" name="email" placeholder="Email Address" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="pwd" placeholder="Password" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-xs-6">
							
										<label>
											<input type="checkbox" name="app-checkbox-1" value="0"> Remember me</label>
							
								</div>
								<div class="col-md-12 col-xs-12">
									<button onclick="_paq.push(['FormAnalytics::trackFormSubmit', document.getElementById('loginform')])"  type="submit" name="submit" class="btn btn-success btn-block">Sign In</button>
									<p data-track-content="" data-content-name="LognForm" data-content-piece="forget_password" data-content-target="forget_password"  style="text-align: center;"><a href="<?php echo base_url('forget-pass'); ?>">Forget Password</a></p>
								</div> 
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="app-login-box-or">
					<div class="or">OR</div>
				</div>
				<div class="app-login-box-container">
					<button class="btn btn-facebook btn-block" disabled>Connect With Facebook</button>
					<button class="btn btn-twitter btn-block" disabled>Connect With Gmail</button>
				</div> -->
				
			</div>
		</div>
		<!-- END APP CONTAINER -->
	</div>

</body>
</html>


























>>>>>>> 2d8c189526b50ff6e33af6689cd39a936fd561d8
