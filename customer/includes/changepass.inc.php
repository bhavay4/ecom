<?php 
@session_start();
include("dbh.inc.php"); 
if(isset($_SESSION['u_id']))
{
	$u_id = $_SESSION['u_id'];
	
	if(isset($_POST['change_pass'])){
		
		$old_pass = $_POST['old_pass']; 
		$new_pass = $_POST['new_pass'];
		$new_pass_again = $_POST['new_pass_again'];
		
		$get_real_pass = "select * from customers where customer_pass='$old_pass'";
		
		$run_real_pass = mysqli_query($con, $get_real_pass); 
		
		$check_pass = mysqli_num_rows($run_real_pass);
				
		if($check_pass==0){
			
			echo "<script>alert('Your current password is not valid, try again')</script>";
			exit();
			
			}
			if($new_pass!=$new_pass_again){
				
				echo "<script>alert('New password did not match, try again')</script>";
			exit();
				
				}
				else {
					
					$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c'";
					$run_pass = mysqli_query($con, $update_pass); 
					
					echo "<script>alert('Your pass has been successfully changed!')</script>";
					echo "<script>window.open('my_account.php','_self')</script>";
					}
		
		
		
		
		
		}
	
	

}
?>