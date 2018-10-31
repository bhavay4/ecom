
<?php
	include('header.php');
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<?php


				if(isset($_GET['first'])){
					$first = $_GET['first'];
					echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
				}
				else{
					echo '<input type="text" name="first" placeholder="Firstname">';
				}

				if(isset($_GET['last'])){
					$last = $_GET['last'];
					echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
				}
				else{
					echo '<input type="text" name="last" placeholder="Lastname">';
				}

				if(isset($_GET['email'])){
					$email = $_GET['email'];
					echo '<input type="text" name="email" placeholder="Email" value="'.$email.'">';
				}
				else{
					echo '<input type="text" name="email" placeholder="Email">';
				}

				if(isset($_GET['uid'])){
					$uid = $_GET['uid'];
					echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
				}
				else{
					echo '<input type="text" name="uid" placeholder="Username">';
				}

				if(isset($_GET['pwd'])){
					$pwd = $_GET['pwd'];
					echo '<input type="password" name="pwd" placeholder="Password" value="'.$pwd.'">';
				}
				else{
					echo '<input type="password" name="pwd" placeholder="Password">';
				}
            
            if(isset($_GET['country'])){
					$first = $_GET['country'];
					echo '<input type="text" name="country" placeholder="Country" value="'.$country.'">';
				}
				else{
					echo '<input type="text" name="country" placeholder="Country">';
				}
            
            if(isset($_GET['contact'])){
					$first = $_GET['contact'];
					echo '<input type="text" name="contact" placeholder="Contact" value="'.$contact.'">';
				}
				else{
					echo '<input type="text" name="contact" placeholder="Contact">';
				}
            
            if(isset($_GET['address'])){
					$first = $_GET['address'];
					echo '<input type="text" name="address" placeholder="Address" value="'.$address.'">';
				}
				else{
					echo '<input type="text" name="address" placeholder="Address">';
				}
            
            if(isset($_GET['zip_code'])){
					$first = $_GET['zip_code'];
					echo '<input type="number" name="zip_code" placeholder="zip_code" value="'.$zip_code.'">';
				}
				else{
					echo '<input type="number" name="zip_code" placeholder="zip_code">';
				}


            
			?>
			
			<button type="submit" name="submit" class="btn btn-info">Sign up</button>

		</form>
	</div>
</section>


