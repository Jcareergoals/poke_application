<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Poke | Dashboard</title>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/f/ff/Finger-pointing-icon.png">
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="/assets/css/pokes_styles.css">
		<?php
			$poke_info = $this->session->userdata('poke_history');
			$user = $this->session->userdata('user');
			$poke = $this->session->userdata('pokes');
			$x = rand(1,6); 
		?>
		<style type="text/css">
			body {
				background-color: rgb(245,245,245);
				background: url('./../assets/images/img<?php echo $x;?>.jpg') no-repeat center center fixed;
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
				<div class="col-xs-12">
					<h4>Welcome, <?php echo $user['alias'];?>!</h4>
					<a href="users/logout" class='logout'>Logout</a>
					<?php if($poke)
						{
							if(count($poke) == 1)
							{
								echo "<p>1 person poked you</p>";
							} 
							else 
							{
								echo "<p>".count($poke)." people poked you";	
							}
						}
						else 
						{
							echo "<p>No one has pokes you yet</p>";
						} 
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 poke_log">
				<?php foreach ($poke as $y) {
					echo "<p>{$y['alias']} poked you {$y['poke_count']} times. </p>";		
				}?>
				</div>
			</div>
			<div class="row">
				<h4 class='col-xs-12'>People you may want to poke:</h4>
				<div class="col-xs-12 poke_table">
					<table class='table table-striped table-bordered table-condensed table-hover'>
						<tr>
							<th>Name</th>
							<th>Alias</th>
							<th>Email Address</th>
							<th>Poke History</th>
							<th>Action</th>
						</tr>
				<?php if($poke_info){
					foreach ($poke_info as $x) {?>
						<tr>
							<td><?php echo $x['name'];?></td>
							<td><?php echo $x['alias'];?></td>
							<td><?php echo $x['email'];?></td>
							<td><?php echo $x['name'] ." has ".$x['poke_history']." pokes.";?></td>
							<td><a href="/pokes/poke_user/<?php echo $x['id']?>/<?php echo $user['id']?>" class='poke btn'>Poke</a></td>
						</tr>
				<?php }}?>
					</table>
				</div>
			</div>
		</div> <!-- End Container -->

		<!-- Copyright Section -->
		<p class='copyright'>Copyright &copy; 2016 by <a href="https://www.linkedin.com/in/jose-chery-763110a1">Jose Chery</a></p>
	</body> 
</html>