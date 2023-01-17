<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.0/dist/paper.min.css" /> -->


</head>

<body>
	<!-- <nav class="navbar navbar-default">
		<div class="container-fluid">

		</div>

	</nav> -->
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h2>Admin Login</h2> <br />
		<h4>Username: admin Password: admin</h4>

		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if (isset($_SESSION['message'])) : ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
				<script>
					(function() {
						// removing the message 3 seconds after the page load
						setTimeout(function() {
							document.querySelector('.msg').remove();
						}, 3000)
					})();
				</script>
			<?php
			endif;
			// clearing the message
			unset($_SESSION['message']);
			?>
			<form action="login_query.php" method="POST">
				<h3>Login here...</h3>

				<div class="form-group">
					<label for="paperInputs1">
						<h5>Username</h5>
					</label>
					<input type="text" placeholder="Enter username" id="paperInputs1" name="username" required />
				</div>
				<div class="form-group">
					<label for="paperInputs2">
						<h5>Password</h5>
					</label>
					<input type="password" placeholder="Enter password" id="paperInputs2" name="password" required />
				</div>
				<br />
				<div class="form-group">
					<button class="btn-large" name="login">Login</button>
					<br />
					<br />
					<a class="btn-large" href="../index.php">Go Back</a>
				</div>
				<!-- <a href="registration.php">Registration</a> -->
			</form>
		</div>
	</div>
</body>

</html>