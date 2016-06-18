<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pokes</title>
	<meta charset="UTF-8">
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
	<?
		$poke_info = $this->session->userdata('poke_history');
		$user = $this->session->userdata('user');
		$poke = $this->session->userdata('pokes');
	?>
	<style type="text/css">
		<? $x = rand(1,6); ?>
		body {
			background-color: rgb(245,245,245);
			background: url('/assets/images/img<? echo $x;?>.jpg') no-repeat center center fixed;
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
			<div class="col-xs-8">
				<h4>Welcome, <? echo $user['alias'];?>!</h4>
				<? if($poke)
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
			<div class="col-xs-4">
				<a href="users/logout" class='col-xs-offset-10'>Logout</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-4 grey poke_log">
			<? foreach ($poke as $y) {
				echo "<p>{$y['alias']} poked you {$y['poke_count']} times. </p>";		
			}?>
			</div>
		</div>
		<div class="row">
			<h4 class='col-xs-12'>People you may want to poke:</h4>
			<div class="col-xs-12 poke_table">
				<table class='table striped-table table-bordered'>
					<tr>
						<th>Name</th>
						<th>Alias</th>
						<th>Email Address</th>
						<th>Poke History</th>
						<th>action</th>
					</tr>
			<? if($poke_info){
				foreach ($poke_info as $x) {?>
					<tr>
						<td><? echo $x['name'];?></td>
						<td><? echo $x['alias'];?></td>
						<td><? echo $x['email'];?></td>
						<td><? echo $x['name'] ." has ".$x['poke_history']." pokes.";?></td>
						<td><a href="/pokes/poke_user/<? echo $x['id']?>/<? echo $user['id']?>" class='poke btn'>Poke</a></td>
					</tr>
			<?}}?>
				</table>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>