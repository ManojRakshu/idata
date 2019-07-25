<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	#my-container{
		max-width: 600px;
		height: 600px;
		box-shadow: 1px 1px 6px 2px #ccc;
		padding: 20px;
		margin: auto;

	}
</style>
</head>
<body>

<div id="my-container">
	<?php
		if(isset($_GET['message'])){
			$message=$_GET['message'];
			?>
			<div class="alert alert-danger">
				<?php echo $message; ?>
			</div>
		<?php }
		?>
<div class="form-group">
	<form action="verify.php" method="post">
			<label for="email">Name</label>
			<input type="email" class="form-control" name="email" placeholder="Enter your email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Enter your password">
		</div>
		<div class="form-group">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</div>
	</form>
</div>
</div>
</body>
</html>