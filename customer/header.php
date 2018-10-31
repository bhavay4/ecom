<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
<header>
	<nav>
		<div class="main-wrapper">
				
			<div class="nav-login">
				<?php
					if(isset($_SESSION['u_id'])){
						echo '<form action="includes/logout.inc.php" method="POST">
								<button type="submit" name="submit" >Logout</	button>
							</form>';

					} else{
						echo '<form action="includes/login.inc.php?location=index" method="POST">
					<input type="text" name="uid" placeholder="username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<button type="sumit" name="submit">Login</button>
				</form>
				<a href="signup.php">Sign Up</a>';
					}
				?>

				
			</div>
		</div>
	</nav>
</header>