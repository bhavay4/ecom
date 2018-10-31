<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);

	//Error handlers
	//Check for empty fields
	if(empty($first) || empty($last) || empty($email) ||empty($uid)||empty($pwd)||empty($contact)||empty($address)||empty($zip_code)){

		header("Location: ../signup.php?signup=empty");
		exit();

	} else {
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-z]*$/", $first) || !preg_match("/^[a-zA-z]*$/", $last) ){
				header("Location: ../signup.php?signup=invalid?&uid=$uid");
				exit();
		} else{
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=email&first=$first&last=$last&uid=$uid");
				exit();
			} else{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0){
					header("Location: ../signup.php?signup=usertaken&first=$first&last=$last&email=$email");
					exit();
				} else{
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd,country,contact,address,zip_code) VALUES('$first','$last','$email', '$uid', '$hashedPwd','$country','$contact','$address','$zip_code');";
					mysqli_query($conn,$sql);
					header("Location: ../login.php?location=index&signup=success");
					exit();
				}
			}
		}
	}


} else{
	header("Location: ../signup.php");
	exit();
}