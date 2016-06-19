<!DOCTYPE html>
<html lang="en">
<head>
	<title> The Poke | Login</title>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/f/ff/Finger-pointing-icon.png">
	<!-- JQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- JQuery UI Library -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/flick/jquery-ui.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="/assets/css/views_login_styles.css">
	<?php $x = rand(1,6); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#dob').datepicker({changeYear: true, minDate: '-100Y', maxDate: "-1Y"});	
		});
	</script>
	<style type="text/css">
		<?php $x = rand(1,6); ?>
		body {
			background-color: rgb(245,245,245);
			background: url("./../assets/images/img<?php echo $x;?>.jpg") no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 class='col-xs-12'>The Poke</h3>
		</div>
		<div class="row">
			<!-- Registration Section -->
			<div class="col-xs-12 col-sm-6">
				<div class="col-xs-7 col-xs-offset-3">
					<label class='form_type'>Register</label>
				</div>
				<form action='/users/register' method='post' class='form form-horizontal'>
					<div class="form-group">
						<label for='name' class='control-label col-xs-3'>Name:</label>
						<div class="col-xs-9">
							<input type='text' name='name' id='name' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('name'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='alias' class='control-label col-xs-3'>Alias:</label>
						<div class="col-xs-9">
							<input type='text' name='alias' id='alias' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('alias'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='email' class='control-label col-xs-3'>Email:</label>
						<div class="col-xs-9">
							<input type='text' name='email' id='email' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('email'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='password' class='control-label col-xs-3'>Password:</label>
						<div class="col-xs-9">
							<input type='password' name='password' id='password' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('password'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='conform_password' class='control-label col-xs-3'>Confirm password:</label>
						<div class="col-xs-9">
							<input type='password' name='confirm_password' id='confirm_password' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('confirm_password'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='dob' class='control-label col-xs-3'>Date of Birth:</label>
						<div class="col-xs-9">
							<input type='text' name='dob' id='dob' class='form-control' placeholder='MM/DD/YYYY'>
							<span class='error'><?php echo $this->session->flashdata('dob'); ?></span>
						</div>
					</div>
					<div class="col-xs-offset-10">
						<input type='submit' value='Register' class='submit btn'>
					</div>
				</form>
			</div>
			<!-- Login Section -->
			<div class="col-xs-12 col-sm-6">
				<div class="col-xs-7 col-xs-offset-3">
					<label class='form_type'>Login</label>
				</div>
				<form action='/users/login' method='post' class="form form-horizontal">
					<div class="form-group">
						<label for='email2' class='control-label col-xs-3'>Email:</label>
						<div class="col-xs-9">
							<input type='text' name='email2' id='email2' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('email2'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label for='password2' class='control-label col-xs-3'>Password:</label>
						<div class="col-xs-9">
							<input type='password' name='password2' id='password2' class='form-control'>
							<span class='error'><?php echo $this->session->flashdata('password2'); ?></span>
						</div>
					</div>
					<div class="col-xs-offset-10">
						<input type='submit' value='Login' class='submit btn'>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- End Container -->

	<!-- Copyright Section -->
	<p class='copyright'>Copyright &copy; 2016 by <a href="https://www.linkedin.com/in/jose-chery-763110a1">Jose Chery</a></p>
</body> 