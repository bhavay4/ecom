<?php
session_start();

if(isset($_POST['submit'])){

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Checkif inputs are empty

	if(empty($uid) || empty($pwd)){

		header("Location: ../error.php?login=empty");#no account found
		exit();

	} else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck<1){
			header("Location: ../error.php?login=error1");
			exit();
		} else{
			if($row = mysqli_fetch_assoc($result)){
				//De-hasing the password
				$hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
				if($hashedPwdCheck == false){
					header("Location: ../error.php?login=error2");
					exit();
				} elseif($hashedPwdCheck == true){
					//Login the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
                    $_SESSION['u_country']=$row['country'];
                    $_SESSION['u_contact']=$row['contact'];
                    $_SESSION['u_address']=$row['address'];
      include('../../functions/mainfunctions.php');
                update_cart();     
                if(isset($_GET['location']))
                    {
                     $location=$_GET['location'];
                        
					header("Location: ../../$location.php?login=success");}
                    else{
                        header("Location: ../../index.php?login=success");             
                    }
                                     
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../error.php?login=error3");
	exit();
}

